<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class certController extends Controller
{
    public function cert(){
        return view('certification',['title'=>'certifications']);
    }
}
