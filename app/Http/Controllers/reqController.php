<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\requestModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class reqController extends Controller
{
    public function req(){
        try {
       $request= DB::table('request')->get();

        return view('request',['title'=>'Request..','req'=>$request]);
    } catch (\Exception $e) {

        return back()->with('fail', $e->getMessage());
      }
    }
    public function save(){
    
        $user = Auth::user();
        $student = $user->Name;
        $IndexNumber = $user->IndexNumber;
        $students = DB::select('SELECT * FROM students where IndexNumber=?', [$IndexNumber]);
         $studentData = !empty($students) ? $students[0] : null;
        $classId = $studentData->classroom_id ?? '';

         $classes = DB::select('SELECT * FROM classrooms where id = ?', [$classId]);
         $classData = !empty($classes) ? $classes[0] : null;
         $classname = $classData->name ?? '';

        $req=new requestModel();
        $req->Start_Date=request('start');
        $req->End_Date=request('end');
        $req->Request_Message=request('input');

        $req->student = $student;
        $req->IndexNumber = $IndexNumber;
        $req->Class_Name = $classname;

        $req->Class_Id = $classId;

$req->save();
return redirect('/req')->with([
    'mssg' => 'Thank you for submitting your request. It has been forwarded to the relevant authorities.',
    'deliver' => 'Delivered','student' => $req->student
]);

} 
  }

    

