<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\User;
use App\Product;
use App\Cat;


class HomeController extends Controller
{

    public function getIndex(){
        if(Auth::User()){

            return redirect()->route('dashboard');
        }else {
            return view('welcome');
        }
    }
    public function getRegister(){
        return view ('register');
    }
    public function getErrors(){
        return view ('partials.errors');
    }

}
