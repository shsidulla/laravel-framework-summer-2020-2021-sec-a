<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){

    }
    
    public function create(){
        return view('user.create');
    }


    public function createUser(Request $req){
        $user=$this->getUserList();
        
        array_push($user,[$req->id, $req->uname, $req->pass, $req->mail,$req->type]);
        return view('user.list')->with('userlist', $user);
    }

    public function editUser($id){
        $user=$this->getUserList();

        if($id==1){
            return view('user.edit', compact($user[0][1]));
        }
        
    } 

    public function deleteUser($id){

        $user=$this->getUserList();

        if($id==1){
            unset($user[0]);
        }
        elseif ($id==2) {
            unset($user[1]);
        }
        elseif ($id==3) {
            unset($user[2]);
        }
        elseif ($id==4) {
            unset($user[3]);
        }
        return view('user.list')->with('userlist', $user);
    }

    public function all(){
        $user=$this->getUserList();
        return view('user.list')->with('userlist', $user);
    }

    public function getUserList(){
        return [
            [1,'Rifat','1234','abc@gmail.com', 'Admin'],
            [2,'Harry','1234','abc@gmail.com', 'User'],
            [3,'Ron','1234','abc@gmail.com', 'User'],
            [4,'Ron','1234','abc@gmail.com', 'User'],
        ];
    }
}
