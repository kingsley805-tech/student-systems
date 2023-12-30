<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\auth;

class examrController extends Controller
{
    public function report()
    {
        $IndexNumber=trim(Auth::user()->IndexNumber);
        $resulttable = DB::select('SELECT * FROM assessment_lists where IndexNumber=?',[$IndexNumber]);
        $assesment = DB::select('SELECT * FROM assesments where IndexNumber=?',[$IndexNumber]);
        $addasses = $assesment[0];
        $studentName = DB::select('SELECT * FROM create_login_models where IndexNumber=?',[$IndexNumber]);
        $studentAdd= $studentName[0];
        $studentRoll = DB::select('SELECT * FROM students where IndexNumber=?',[$IndexNumber]);
        $studentData = $studentRoll[0];
        
        return view('examR', ['title' => 'Report Card', 'resulttable' => $resulttable,'assesment'=>$addasses,'studentAdd'=>$studentAdd,'studentData'=>$studentData]);
    }
    
}
