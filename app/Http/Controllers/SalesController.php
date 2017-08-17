<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Cat;
use App\Sale;
use App\Cart;
use Illuminate\Support\Facades\Session;

class SalesController extends Controller
{
    public function getSalesList(){
        return view ('products.sales-list');
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
        $cart->add($pd, $pd->id);
        $result=Session::put('cart', $cart);
        return $result;
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
        return view ('orders.cart');
    }
    public function getReduceCart(Request $request){
        $id=$request['id'];
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->reduce($id);
        if(count($cart->items) <= 0){
            $result=Session::forget('cart');
        }else{
            $result=Session::put('cart', $cart);
        }
        return $result;
    }
    public function getIncreaseCart(Request $request){
        $id=$request['id'];
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->increase($id);
        $result=Session::put('cart', $cart);
        return $result;

    }
    public function getClearCart(){
        Session::forget('cart');
        echo "clear";
    }
}

