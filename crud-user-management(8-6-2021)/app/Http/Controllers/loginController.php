<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function verification(Request $req){
        if($req->uname==""){
            echo"user name cannot be empty<br>";
        }
        if ($req->pass=="") {
            echo"password cannot be empty<br>";
        }
        else{
            return redirect('/home');
        }
    }
}
