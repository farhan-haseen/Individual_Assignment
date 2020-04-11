<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class login extends Controller
{
    public function index(Request $req){
        return view('login.index');
    }
    public function verify(Request $req){

        $req->validate([
            'uname'=>'bail|required|min:3',
            'password'=>'bail|required|min:3',
        ]);
    		
        $user = user::where('username', $req->uname)
        ->where('password', $req->password)
        ->first();

        if($user != null){
            
            $req->session()->put('username', $req->uname);
            if($user->type == 'admin'){
                return redirect('/admin_home');
            }
            else
            {
                return redirect('/cust_home');
            }
            
        }
        else{
            $req->session()->flash('msg', 'Either username or password is invalid!');
            return redirect('/login');
        }
    }
}
