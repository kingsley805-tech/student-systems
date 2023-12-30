<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class classtableController extends Controller
{
    public function class(){
        try {
            $IndexNumber = trim(Auth::user()->IndexNumber);
            $students = DB::select('SELECT * FROM students WHERE IndexNumber = ?', [$IndexNumber]);
            $Student = !empty($students) ? $students[0] : ["classroom_id" => ""];
            $classroom_id = trim($Student->classroom_id);
            $results = DB::select('SELECT * FROM routines WHERE classroom_id = ?', [$classroom_id]);

            $classess = DB::select('SELECT * FROM classrooms WHERE id = ?', [$classroom_id]);
            $class = !empty($classess) ? $classess[0] : ["name" => '',];

            $Monday = [];
            $Tuesday = [];
            $Wednesday = [];
            $Thurday = [];
            $Friday = [];

            foreach ($results as $item) {
                $day = $item->day;
                $teacher_id = $item->teacher_id;
                $subject_id = $item->subject_id;

                $Subjects = DB::select('SELECT * FROM subjects WHERE id  = ?', [$subject_id]);
                $subject = !empty($Subjects) ? $Subjects[0] : ["name" => '',];

                $arrayData = (object)["start_time" => $item->start_time, "end_time" => $item->end_time, "room_number" => $item->room_number, "subjectName" => $subject->name];

                if($day == 'Monday'){
                    array_push($Monday, $arrayData);
                } 
                else if ($day == 'Tuesday'){
                    array_push($Tuesday, $arrayData);
                }

                else if ($day == 'Wednesday'){
                    array_push($Wednesday, $arrayData);
                }

                else if ($day == 'Thursday'){
                    array_push($Thurday, $arrayData);
                }

                else {
                    array_push($Friday, $arrayData);
                }
            }

            $resultData = (object)["Monday" => $Monday, "Tuesday" => $Tuesday, "Wednesday" => $Wednesday, "Thursday" => $Thurday, "Friday" => $Friday];
           return view('classT', ['title' => 'Class table', 'resultData' => $resultData, 'class' => $class->name]);
// Changed $notes to $work
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }
}


 