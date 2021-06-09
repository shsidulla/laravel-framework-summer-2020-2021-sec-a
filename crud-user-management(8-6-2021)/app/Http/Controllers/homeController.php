<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $name="Rifat Ishtiyak";
        return view('home.homePage', compact('name'));
    }
}
