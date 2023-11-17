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
}
