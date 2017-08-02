<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Auth;



class AuthController extends Controller
{

    public function getLogin(){
        if(Auth::User()){
            return redirect()->route('dashboard');
        }
        return view ('auth.login');
    }
    public function getRegister(){
        return view ('auth.register');

    }
    public function postLogin(Request $request){

        $this->validate($request, [
            'user_name'=>'required|exists:users',
            'password'=>'required'
        ]);
        $user=User::Where('user_name', $request['user_name'])->first();
        if(!$user->hasRole('Administrator')){
            if($user->active){
                return redirect()->route('login')->with('err', 'The selected user account is already login other device.');

            }

        }

            if (Auth::attempt(['user_name' => $request['user_name'], 'password' => $request['password']])) {
                $user=Auth::User();
                $user->active=1;
                $user->active_ip=$request->getClientIp();
                $user->update();
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('login')->with('err', 'Authentication Failed.');
            }

    }
    public function postRegister(Request $request){
        $this->validate($request, [
           'user_name' =>'required| unique:users',
            'email'=>'required|email| unique:users',
            'password'=>'required| min:5',
            'confirm_password'=>'required|same:password'
        ]);

        $carbon = Carbon::now();
        $date = $carbon->toDateTimeString();

        $user=new User();
        $user->user_name=$request['user_name'];
        $user->email=$request['email'];
        $user->password=bcrypt($request['password']);
        $user->last_login=$date;
        $user->last_login_ip=0;
        $user->active_ip=0;
        $user->save();
        $user->assignRole('Waiter');
        return redirect()->route('register')->with('info','The user account have been successfully created.');

    }
}
