<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;



class examtController extends Controller
{
    public function exam(){
        try {
        $exam='f9111db71fa2be55';
        $answer = DB::select('SELECT * FROM addexam_subjects where examinationNumber = ?',[$exam]);
    
        $examination2 = DB::select('SELECT * FROM examinations where examinationNumber = ?', [$exam]);
        $examination = empty($examination2) ? null : $examination2[0];
        
        //print_r($examination);

        $class;
        $classRoom;
        if($examination){
          $classroom_id = $examination->classroom_id;
          $class = DB::select('SELECT * FROM classrooms where id = ?',[$classroom_id]);
          $classRoom = empty($class) ? null : $class[0];
        }else{
            $class = null;
            $classRoom = null;
        }

        return view('examT',['title'=>'Exams table', 'answer' => $answer, 'examination' => $examination, 'class' => $classRoom]);
        
       } catch (\Exception $e) {

        return back()->with('fail', $e->getMessage());
      }
    }
}
