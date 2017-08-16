<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Product;
use Auth;

class ProductController extends Controller
{
    public function getCategory(){
        $cats=Cat::all();
        return view ('products.category')->with(['cats'=>$cats]);
    }
    public function postNewCategory(Request $request){
        $this->validate($request,[
           'cat_name'=>'required'
        ]);
        $cat=new Cat();
        $cat->cat_name=$request['cat_name'];
        $cat->save();
        return redirect()->back()->with('info', 'အမ်ိဴးအစားသစ္ထည့္သြင္းျခင္းေအာင္ျမင္ပါသည္။');
    }
    public function getProducts(){
        $pds=Product::OrderBy('id','desc')->paginate('20');
        $cats=Cat::all();
        return view ('products.product')->with(['cats'=>$cats])->with(['pds'=>$pds]);
    }
    public function postNewProduct(Request $request){
        $this->validate($request,[
           'p_name'=>'required',
            'p_price'=>'required',
            'cat_id'=>'required',
            'amount'=>'required'
        ]);

        $pd=new Product();
        $pd->p_name=$request['p_name'];
        $pd->p_price=$request['p_price'];
        $pd->cat_id=$request['cat_id'];
        $pd->p_slug=uniqid();
        $pd->amount=$request['amount'];
        $pd->amount_type=$request['amount_type'];
        $pd->user_id=Auth::User()->id;
        $pd->save();



        return redirect()->back()->with('info','﻿ကုန္ပစၥည္းအသစ္ထည့္သြင္းျခင္းေအာင္ျမင္ပါသည္။');
    }
    public function getProductByCat($cat_id){
        $pds=Product::Where('cat_id', $cat_id)->paginate('20');
        if(count($pds)<1){
            return redirect()->back()->with('err', 'ကုန္ပစၥည္းမ်ားထည့္သြင္းထားျခင္းမရွိေသးပါ။');
        }else {
            return view('products.product-cat')->with(['pds' => $pds])->with(['cat_id' => $cat_id]);
        }
    }
}
