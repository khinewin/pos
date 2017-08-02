<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;

class AuditController extends Controller
{
    public function getAudit(){
        return view ('orders.audit');
    }
    public function getPreAudit(Request $request){
        $grandTotalAmount=0;
        $getDate=$request['getDate'];

        if($getDate){
            $shDate=date('(D)d/m/Y', strtotime($getDate));
        }else{
            $shDate=date('(M) m/Y');
        }

        if($getDate) {
            $preDate = date('Y-m-d', strtotime($getDate));
            $orders = Order::where('created_at', 'LIKE', '%' . $preDate . '%')->orderBy('id', 'desc')->get();
            $orders->transform(function ($order, $key) {
                $order->cart = unserialize($order->cart);
                return $order;
            });

            foreach ($orders as $order){
                foreach ($order->cart->items as $item){
                    $totalAmount=$item['qty'] * $item['content']['content_price'];
                    $grandTotalAmount += $totalAmount;
                }
            }
        }
        else{
            $preMonth=date('Y-m');
            $orders = Order::where('created_at', 'LIKE', '%' . $preMonth . '%')->orderBy('id', 'desc')->get();
            $orders->transform(function ($order, $key) {
                $order->cart = unserialize($order->cart);
                return $order;
            });

            foreach ($orders as $order){
                foreach ($order->cart->items as $item){
                    $totalAmount=$item['qty'] * $item['content']['content_price'];
                    $grandTotalAmount += $totalAmount;
                }
            }
        }



        return view ('orders.pre-audit')->with(['orders'=>$orders])->with(['grandTotalAmount'=>$grandTotalAmount])->with(['shDate'=>$shDate]);
    }
}
