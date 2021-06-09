<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index(){
        return view('registration.registration');
    }

    public function verification(Request $req){
        if($req->uname==""){
            echo"user name cannot be empty <br>";
        }
        if($req->mail==""){
            echo"email cannot be empty <br>";
        }
        if($req->pass=="" || $req->cpass==""){
            echo"password and confirm pass cannot be empty <br>";
        }
        if($req->pass != $req->cpass){
            echo"password and confirm pass doesn't <br>";
        }
        else if(!empty($req->uname) &&  !empty($req->mail) && !empty($req->pass)){
            return redirect('/login');
        }
    }
}
