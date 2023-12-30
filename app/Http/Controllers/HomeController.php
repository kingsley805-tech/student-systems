<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        try{
            $index = trim(Auth::user()->IndexNumber);
            $add = DB::select('SELECT * FROM students where IndexNumber=?', [$index]);
            $adds = !empty($add) ? $add[0] : [];
        
            $bus = trim($adds->busRouteID);
            $buss = DB::select('SELECT * FROM bus_route_models where routeID = ?', [$bus]);
            $buz = !empty($buss) ? $buss[0] : ["routeName" => "", "fare" =>"", "busNumber" =>""]; // Fix variable name
            //
            $busNumber = trim($buz->busNumber);
            $cars = DB::select('SELECT * FROM bus_models where busNumber = ?', [$busNumber]);
            $car = !empty($cars) ? $cars[0] : ["driverName" => "Unknown", "driverNumber" => "Unknown"];
        
            $number = $index;
            $voice = DB::select('select * from invoices where IndexNumber = ?', [$number]);
            $vow = !empty($voice) ? $voice[0] : null;
        
            $note='';
            $notes=DB::select('SELECT * FROM noticeboards');
        //parents
           $parent = trim($adds->myparent_id);
           $fada=DB::select('SELECT * FROM  myparents where id = ?',[$parent]);
           $father = !empty($fada) ? $fada[0] : [];
            return view('studentsboard',['title'=>'students page', 'add' => $adds, 'buz' => $buz, 'cars' => $car, 'vow'=>$vow,'fada'=>$father,'note'=>$notes]);
            
        }catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
               
    }
}
