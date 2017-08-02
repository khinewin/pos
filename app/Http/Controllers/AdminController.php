<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Order;


class AdminController extends Controller
{
    public function __construct(Request $request)
    {

        $this->middleware(function ($request, $next) {
            $user=$this->user= Auth::user();
            if(!$user->active){
                $carbon = Carbon::now();
                $date = $carbon->toDateTimeString();

                Auth::logout();
                $user->last_login=$date;
                $user->last_login_ip=$request->getClientIp();
                $user->update();
                return redirect()->route('login')->with('err', 'Your account have been logout.');
            }

            return $next($request);
        });


    }

    public function getErrors(){
        return view('partials.errors');
    }
    public function getForceLogout($user_name){
        $user=User::where('user_name', $user_name)->first();
        $user->active=0;
        $user->update();
        return redirect()->back();
    }
    public function getLogout(Request $request){
        $carbon = Carbon::now();
        $date = $carbon->toDateTimeString();


        $user=Auth::User();
        $user->last_login_ip=$request->getClientIp();
        $user->last_login=$date;
        $user->active=0;
        $user->update();

        Auth::logout();

        return redirect()->route('login');

    }
    public function getEditUser($user_name){
        $user=User::Where('user_name', $user_name)->first();
        if(!Auth::User()->hasRole('Administrator') && ($user->hasRole('Administrator'))){
            return redirect()->back()->with('err', 'Could not edit Administrator user account.');
        }else {
            return view('users.edit-user')->with(['user' => $user]);
        }
    }
    public function postUpdateUser(Request $request){
        $id=$request['id'];

        $user=User::where('id', $id)->first();
        $user->email=$request['email'];
        $user->syncRoles($request['account_role']);
        $user->update();
        return redirect()->back()->with('info', 'The user account have been updated.');
    }
    public function postUpdateUserPassword(Request $request){
        $this->validate($request,[
            'new_password'=>'required|min:5',
           'confirm_new_password'=>'required|same:new_password'
        ]);
        $id=$request['id'];
        $user=User::where('id',$id)->first();
        $user->password=bcrypt($request['new_password']);
        $user->update();
        return redirect()->back()->with('info', 'The user account password have been updated.');
    }
    public function postDeleteUser(Request $request){
        $user_name=$request['user_name'];
        $user=User::Where('user_name', $user_name)->first();
        if($user->hasRole('Administrator')){
            return redirect()->back()->with('err', 'Could not delete Administrator user account.');
        }else {
            $user->delete();
            return redirect()->back()->with('info', 'The user account have been deleted.');
        }
    }
    public function getDashboard(){
        $cts=Content::all();
        $cats=Category::all();
        $users=User::all();
        $ords=Order::all();
            return view('users.home')->with(['users'=>$users])->with(['cts'=>$cts])->with(['cats'=>$cats])->with(['ords'=>$ords]);
    }
    public function getProfile(){
        $user=Auth::User();
        return view ('users.profile')->with(['user'=>$user]);
    }
    public function getUserManager(){
        $users=User::all();
        return view ('users.user-manager')->with(['users'=>$users]);
    }
}
