<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\log;

class admitController extends Controller
{
    public function admit(){
        try{
            $IndexNumber = trim(Auth::user()->IndexNumber);
            $add=DB::select('SELECT * FROM students where IndexNumber=?',[$IndexNumber]);
            $adds = !empty($add) ? $add[0] : (object)["name" => '',];
        return view('admitC',['title'=>'Admit card','add'=>$adds]);
    } catch (\Exception $e) {
log::erro($e->getMessage());
        return back()->with('fail', 'invalid');
      }
    }
}
  