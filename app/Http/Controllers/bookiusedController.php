<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\log;

class bookIusedController extends Controller
{
    public function book(){
        try{
            $IndexNumber = trim(Auth::user()->IndexNumber);
            $books = DB::select('SELECT * FROM issue_book_models WHERE IndexNumber = ? AND 	status = ?', [$IndexNumber, 'pending']);
            return view('bookI',['title'=>'Books Issued','books'=>$books]);
    } catch (\Exception $e) {

        return back()->with('fail', $e->getMessage());
      }
    }
}
