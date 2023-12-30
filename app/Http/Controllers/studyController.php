<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;



class studyController extends Controller
{
    public function study()
    {
        try {
            
            $IndexNumber = trim(Auth::user()->IndexNumber);
            $students = DB::select('SELECT * FROM students WHERE IndexNumber = ?', [$IndexNumber]);
            $Student = !empty($students) ? $students[0] : ["classroom_id " => ""];
            $classroom_id = trim($Student->classroom_id);
            $materialResult = DB::select('SELECT * FROM studymaterials WHERE classroom_id  = ? ORDER BY id DESC', [$classroom_id]);
            // Pass the retrieved data to the view
            return view('studyMaterials', ['title' => 'Study Materials Page', 'materialResult' => $materialResult]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }
}
