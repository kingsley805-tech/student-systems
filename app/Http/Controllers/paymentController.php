<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;




class paymentController extends Controller
{
  public function pay(){
    try {
        $IndexNumber = trim(Auth::user()->IndexNumber);
        $payresult = DB::select('SELECT * FROM payments WHERE IndexNumber = ? ORDER BY id DESC LIMIT 10', [$IndexNumber]);
        return view('payment', ['title' => 'payment history', 'payment' => $payresult]);
    } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
    }
}


}
