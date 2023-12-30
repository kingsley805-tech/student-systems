<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class attendController extends Controller
{
    public function attend(){
       

        return view('attendance',['title'=>'Attendance Report']);
    }
}
