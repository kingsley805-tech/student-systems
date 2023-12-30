<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
public function event(){
    return view('events',['title'=>'Events']);
  }
}


// public function event(){
//     try {
//         $IndexNumber = trim(Auth::user()->IndexNumber);
//         $students = DB::select('SELECT * FROM students WHERE IndexNumber = ?', [$IndexNumber]);
//         $Student = !empty($students) ? $students[0] : ["classroom_id" => ""];
//         $classroom_id = trim($Student->classroom_id);
//         $work = DB::select('SELECT * FROM noticeboards WHERE status = ? ORDER BY id DESC', [$classroom_id, 'active']);
        
//         return view('events', ['title'=>'Events', 'note' => $work]); // Changed $notes to $work
//     } catch (\Exception $e) {
//         return back()->with('fail', $e->getMessage());
//     }
// }