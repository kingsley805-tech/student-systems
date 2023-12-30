<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function log(){
        return view('login',['title' => 'Welcome to rapid school', 'data'=>'kingsley']);
    }
}
