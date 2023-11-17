<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function message(){
        return view('message');
    }
    public function sobre(){
        return view('sobre');
    }
    public function eventos(){
        return view('eventos');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
