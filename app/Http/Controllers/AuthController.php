<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AuthController extends Controller
{
    public function postRegister(Request $request){
        $this->validate($request,[
           'user_name'=>'required|unique:users',
            'email'=>'required|unique:users',
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password'
        ]);

        $user=new User();
        $user->user_name=$request['user_name'];
        $user->email=$request['email'];
        $user->password=bcrypt($request['password']);
        $user->slug=uniqid();
        $user->save();
        return redirect()->back()->with('info','The user account have been created.');
    }
    public function postLogin(Request $request){
        $this->validate($request, [
           'user_name'=>'required|exists:users',
            'password'=>'required'
        ]);
        if(Auth::attempt(['user_name'=>$request['user_name'], 'password'=>$request['password']])){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('err','၀င္ခြင့္ အခ်က္အလက္မွားယြင္းေနပါသည္။');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('/');
    }
}
