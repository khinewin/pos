<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Cat;
use App\Product;
class UserController extends Controller
{
    public function getDashboard(){
        $cats=Cat::all();
        $pds=Product::all();
        $users=User::all();
        return view('users.home')->with(['users'=>$users])->with(['pds'=>$pds])->with(['cats'=>$cats]);
    }
    public function getUserManager(){
        $users=User::all();
        return view('users.user-manager')->with(['users'=>$users]);
    }
    public function getEditUser($slug){
        $user=User::where('slug',$slug)->first();
        return view ('users.edit-user')->with(['user'=>$user]);
    }

    public function postUpdateUser(Request $request){
        $user=User::where('slug', $request['slug'])->first();
        $user->email=$request['email'];
        $user->syncRoles($request['account_role']);
        $user->update();

        return redirect()->back()->with('info', '၀န္ထမ္းကိုယ္ေရး အခ်က္အလက္စီမံျခင္းေအာင္ျမင္ပါသည္။');
    }
    public function postUpdatePassword(Request $request){
        $this->validate($request,[
            'new_password'=>'required|min:5',
            'confirm_new_password'=>'required|same:new_password'
        ]);
        $slug=$request['slug'];
        $user=User::where('slug', $slug)->first();
        $user->password=bcrypt($request['new_password']);
        $user->update();
        return redirect()->back()->with('info', '၀န္ထမ္း၏ လ်ိဴ႕၀ွက္နံပတ္ ေျပာင္းလဲျခင္းေအာင္ျမင္ပါသည္။');

    }
}
