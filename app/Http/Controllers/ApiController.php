<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;



class ApiController extends Controller
{
 public function getIndex(){
     $cts=Content::OrderBy('id','desc')->paginate('10');
     return response()->json($cts);
 }
}
