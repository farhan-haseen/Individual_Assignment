<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\book;

class admin_home extends Controller
{
    public function index(Request $req){
        return view('admin_home.index');
    }
    public function profile(Request $req){

        $user = $req->session()->get('username');
        $list = user::where('username',$user)->get();
        // echo $list[0];
        return view('admin_home.profile',['userInfo'=>$list[0]]);

    }
    public function custlist(Request $req){

        $list = user::where('type','customer')->get();
        echo $list[0];
    }
    public function userlist(Request $req){

        $list = user::all();
        echo $list;
    }
    public function newbook(Request $req){

        return view('admin_home.newbook');
    }
    public function newbook_2(Request $req){

        $book = new book();

        $book->bookName         = $req->Bookname;
        $book->price            = $req->Price;
        $book->category         = $req->Category;
        $book->authorName       = $req->Authorname;
        $book->authorInfo       = $req->Authorinfo;
        
        $book->save();

        return view('admin_home.index');
    }
}
