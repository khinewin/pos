<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Cat;
use App\Sale;
use App\Onsale;
use App\Cart;

use Auth;
use Illuminate\Support\Facades\Session;

class SalesController extends Controller
{
    public function getSalesList(){
        $sls=Onsale::OrderBy('id', 'desc')->get();
        $sls->transform(function ($sale, $key){
            $sale->cart=unserialize($sale->cart);
            return $sale;
        });
        return view ('products.sales-list')->with(['sls'=>$sls]);
    }
    public function getSales(){
        $pds=Product::OrderBy('id', 'desc')->paginate('10');
        return view ('products.sales')->with(['pds'=>$pds]);
    }
    public function getAddToCart(Request $request){
        $p_slug=$request['p_slug'];
        $pd=Product::where('p_slug', $p_slug)->first();
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        if($pd->amount >=1) {
            $cart->add($pd, $pd->id);
            $backup_amount = $pd->amount - 1;
            $pd->amount = $backup_amount;
            $pd->update();

        }else{
            echo "<div class='alert alert-danger text-center'> <i class='fa fa-warning'></i> လက္က်န္ကုန္ပစၥည္းအေရအတြက္မလံုေလာက္ေသာပါ။</div>";
        }
        return Session::put('cart', $cart);

    }

    public function getCartInfo(){
        return view ('orders.cart-info');
    }
    public function getPreCart(){
        if(Session::has('cart')){
            $cart=Session::has('cart') ? Session::get('cart') : null;
            return view ('orders.pre-cart')->with(['pds'=>$cart->items])->with(['totalPrice'=>$cart->totalPrice]);

        }else{
            return view ('orders.pre-cart');

        }
    }
    public function getCart(){
        if(Session::has('cart')) {
            $cart = Session::has('cart') ? Session::get('cart') : null;
            return view('orders.cart')->with(['totalPrice' => $cart->totalPrice]);
        }else{
            return redirect()->route('sales')->with('err','ေရာင္းရန္မွတ္ထားေသာစာရင္းမရွိေသးပါ။');
        }
    }
    public function getReduceCart(Request $request){
        $id=$request['id'];
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->reduce($id);
        $pd=Product::where('id', $id)->first();
        $backup_amount=$pd->amount + 1;
        $pd->amount=$backup_amount;
        $pd->update();

        if(count($cart->items) <= 0){
             Session::forget('cart');
        }else{
            Session::put('cart', $cart);

        }
        echo "success";

    }
    public function getIncreaseCart(Request $request){
        $id=$request['id'];
        $pd=Product::Where('id', $id)->first();
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        if($oldCart->items[$id]['qty'] < $pd->amount + $oldCart->items[$id]['qty']){
            $cart->increase($id);
            $pd=Product::where('id', $id)->first();
            $backup_amount=$pd->amount - 1;
            $pd->amount=$backup_amount;
            $pd->update();
            return Session::put('cart', $cart);
        }else{
           echo "<div class='alert alert-danger text-center'><i class='fa fa-warning'></i> လက္က်န္ကုန္ပစၥည္းအေရအတြက္မလံုေလာက္ေသာပါ။</div>";
        }

        echo "success";
    }
    public function getClearCart(){
        Session::forget('cart');
        echo "clear";
    }
    public function postConfirmSale(Request $request){
        $this->validate($request,[
           'customer_name'=>'required',
            'payment'=>'required'
        ]);
        if(Session::get('cart')->totalPrice >= $request['payment']){
            $credit=Session::get('cart')->totalPrice - $request['payment'];
        }else{
            $credit=0;
        }
         $cart=Session::has('cart') ? Session::get('cart') : null;
        $os=new Onsale();
        $os->cart=serialize($cart);
        $os->customer_name=$request['customer_name'];
        $os->totalAmount=Session::get('cart')->totalPrice;
        $os->payment=$request['payment'];
        $os->credit=$credit;
        $os->user_id=Auth::User()->id;
        $os->save();
        Session::forget('cart');

        $pd=Product::where('amount','0')->get();
        foreach ($pd as $pds){
            $pds->delete();
        }


        return redirect()->route('sales-list');

    }
}

