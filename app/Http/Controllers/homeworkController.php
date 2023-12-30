<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class homeworkController extends Controller
{

    public function works(){
        try {
        $IndexNumber = trim(Auth::user()->IndexNumber);
        $students = DB::select('SELECT * FROM students WHERE IndexNumber = ?', [$IndexNumber]);
        $Student = !empty($students) ? $students[0] : ["classroom_id " => ""];
        $classroom_id = trim($Student->classroom_id);
        $work = DB::select('SELECT * FROM homeworks WHERE classroom_id  = ? ORDER BY id DESC', [$classroom_id]);
        return view('homeWork',['title'=>'Home Works','works' => $work]);
    } catch (\Exception $e) {

        return back()->with('fail', $e->getMessage());
      }
    }
}
