<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liveclassController extends Controller
{
    public function live(){
        return view('liveC',['title'=>'Live classes']);
    }
}
