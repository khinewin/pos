<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Content;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Order;

class CartController extends Controller
{

    public function getAddToCart(Request $request){
        if(Auth::User()){
            if(Auth::User()->hasRole('Waiter')) {
                $id = $request['id'];
                $ct = Content::Where('id', $id)->first();
                $oldCart = Session::has('cart') ? Session::get('cart') : null;
                $cart = new Cart($oldCart);
                $cart->Add($ct, $ct->id);
                $result=$request->session()->put('cart', $cart);
                return $result;
            }else{
                echo "<div class='alert alert-danger'><span class='glyphicon glyphicon-alert'></span> You must be a waiter to make order Please contact your <strong>Administrator</strong>.</div>";

            }

        }else{
            echo "<div class='alert alert-danger'><span class='glyphicon glyphicon-alert'></span> To make order please contact with our Waiter.</div>";
        }

    }
    public function getCartQty(){
        $cart=Session::has('cart') ? Session::get('cart') : null;
        if($cart){
            echo $cart->totalQty;
        }else{
            echo "<i class='fa fa-star-half-empty'></i>";
        }

    }
    public function getPreCart(){
        $cart=Session::has('cart') ? Session::get('cart') : null;
        if($cart){
            return view ('cart.pre-cart')->with(['products'=>$cart->items])->with(['totalAmount'=>$cart->totalAmount]);
        }else{
            return view('cart.pre-cart')->with(['products'=>null]);
        }

    }
    public function getCart(){
        $cart=Session::has('cart') ? Session::get('cart') : null;
        if($cart){
            return view ('cart.cart')->with(['products'=>$cart->items])->with(['totalAmount'=>$cart->totalAmount]);
        }else{
            return view('cart.cart')->with(['products'=>null]);
        }

    }
    public function postEmptyCart(){
        Session::forget('cart');
        return redirect()->back();
    }
    public function getDecreaseCart(Request $request){
        $id=$request['id'];
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->reduceCart($id);
        if(count($cart->items)>0){
          return  Session::put('cart', $cart);
        }else{
           Session::forget('cart');
           echo "emptyCart";
        }

    }
    public function getIncreaseCart(Request $request){
        $id=$request['id'];
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->increaseCart($id);
        $result=Session::put('cart', $cart);
        return $result;
    }
    public function postCheckOut(Request $request){
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $od=new Order();
        $od->customer=$request['customer'];
        $od->cart=serialize($cart);
        $request->user()->order()->save($od);
        Session::forget('cart');
        return redirect()->back()->with('info', 'Your checkout have been completed.');
    }
}
