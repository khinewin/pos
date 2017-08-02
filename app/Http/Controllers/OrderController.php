<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;

class OrderController extends Controller
{
    public function getOrder(){
        $orders=Order::OrderBy('created_at', 'desc')->get();
        return view ('orders.order')->with(['orders'=>$orders]);
    }
    public function getPreOrder(){
       $date=date('Y-m-d');
       $orders=Order::where('created_at' ,'LIKE', '%' . $date . '%')->orderBy('id', 'desc')->get();
       $orders->transform(function ($order, $key){
           $order->cart=unserialize($order->cart);
           return $order;
       });
       return view ('orders.pre-order')->with(['orders'=>$orders]);
    }
    public function changeDeliverStatus(Request $request){
        $id=$request['id'];
        $od=Order::where('id', $id)->first();
        if(!$od->cash_status) {
            if ($od->deliver_status) {
                $od->deliver_status = null;
            } else {
                $od->deliver_status = 1;
            }
            $od->update();
            echo "updated";
        }
    }
    public function changeCashStatus(Request $request){
        $id=$request['id'];
        $od=Order::where('id', $id)->first();
        if($od->deliver_status) {
            if ($od->cash_status) {
                $od->cash_status = null;
            } else {
                $od->cash_status = 1;
            }
            $casher=Auth::User();

            $od->casher_id=$casher->id;
            $od->update();
            echo "updated";
        }
    }

}
