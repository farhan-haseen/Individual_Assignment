<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class reg extends Controller
{
    public function index(Request $req){
        return view('reg.index');
    }
    public function newAccount(Request $req){
    
        $req->validate([
            'username'=>'bail|required|min:3|unique:users',
            'password'=>'bail|required|min:3',
            'name'=>'required',
            'Phone'=>'bail|required|min:11|max:11',
            'Address'=>'required',
            'type'=>'required'
        ]);

        $user = new user();

        $user->username = $req->username;
        $user->password = $req->password;
        $user->fullname     = $req->name;
        $user->phone     = $req->Phone;
        $user->address     = $req->Address;
        $user->type     = $req->type;
        
        if($user->save())
        {
            $req->session()->flash('msg', 'Your account has been made!');
            return redirect('/login');
        }
        else
        {
            $req->session()->flash('msg', 'An Error happened! Try again please!');
            return redirect('/login');
        }
    }
}
