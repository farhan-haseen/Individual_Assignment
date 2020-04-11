<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class logout extends Controller
{
    public function index(Request $req){

        DB::table('carts')->delete();
        $req->session()->flush();
        return redirect('/login');

    }
}
