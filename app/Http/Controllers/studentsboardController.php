<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;





class studentsboardController extends Controller  
{
    public function students(){
try{
    $index = '008019255371';
    $add = DB::select('SELECT * FROM students where IndexNumber=?', [$index]);
    $adds = $add[0];

    $bus = 'Gh-2976543';
    $buss = DB::select('SELECT * FROM bus_route_models where busNumber=?', [$bus]);
    $buz = $buss[0]; // Fix variable name
    //
    $cars = DB::select('SELECT * FROM bus_models where busNumber=?', [$bus]);
    $car = $cars[0];

    $number = '002487256598';
    $voice = DB::select('select * from invoices where IndexNumber = ?', [$number]);
    $vow=$voice[0];

    
    $note='';
    $notes=DB::select('SELECT * FROM noticeboards');
//parents
   $parent='0241668854';
   $fada=DB::select('SELECT * FROM  myparents where MotherContact=?',[$parent]);
   $father=$fada[0];
    $lastname = 'LastName';
    $getting =  DB::select('select * from students where LastName=?',[$lastname]);
    return view('studentsboard',['title'=>'students page', 'getting' =>$getting,'add' => $adds, 'buz' => $buz,'cars'=>$car,'vow'=>$vow,'notice'=>$notice,'fada'=>$father,'note'=>$notes]);
}catch (\Exception $e) {
    return back()->with('fail', $e->getMessage());
}
       
    }
}
