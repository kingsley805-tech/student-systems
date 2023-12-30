<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class noticeboardController extends Controller
{
    public function notice()
{
    try {
        $IndexNumber = trim(Auth::user()->IndexNumber);
        $students = DB::select('SELECT * FROM students WHERE IndexNumber = ?', [$IndexNumber]);
        $Student = !empty($students) ? $students[0] : ["classroom_id" => ""];
        $classroom_id = trim($Student->classroom_id);
        $work = DB::select('SELECT * FROM noticeboards WHERE status = ? ORDER BY id DESC', [$classroom_id, 'active']);
        
        return view('noticeboard', ['title' => 'Notice Board', 'note' => $work]); // Changed $notes to $work
    } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
    }
}

}
