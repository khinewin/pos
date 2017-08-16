<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Cat;
use App\Sale;

class SalesController extends Controller
{
    public function getSalesList(){
        return view ('products.sales-list');
    }
    public function getSales(){
        $pds=Product::OrderBy('id', 'desc')->paginate('10');
        return view ('products.sales')->with(['pds'=>$pds]);
    }
}
