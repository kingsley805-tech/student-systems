<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class feesController extends Controller
{
    public function invoice(){
    
       try {
        $indexNumber =  trim(Auth::user()->IndexNumber);;
        $result = DB::select('SELECT * FROM invoices WHERE IndexNumber = ? AND paymentStatus <> ?', [$indexNumber, 'Paid']);
        return view('feeInvoice',['title'=>'fee Invoice', 'results'=>$result]);
       } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }

    public function invoiceDetails(){
        try {
         $InvoiceID = request()->route('InvoiceID');
         $InvoiceNumber = request()->route('InvoiceNumber');
         $results = DB::select('select * from invoiceitems where InvoiceID = ? AND InvoiceNumber', [$InvoiceID, $InvoiceNumber]);
         return view('invoice-details',['title'=>'fee Invoice', 'results' => $results]);
        } catch (\Exception $e) {
         return back()->with('fail', $e->getMessage());
       }
     }

    public function structure()
        {
            try {
                $IndexNumber = trim(Auth::user()->IndexNumber);
                $students = DB::select('select * from students where IndexNumber = ?', [$IndexNumber]);
                $Student = !empty($students) ? $students[0] : ["classroom_id " => ""];
                $classroom_id = trim($Student->classroom_id);
                $outcome = DB::select('select * from fee_structures where classroom_id = ?', [$classroom_id]);
                return view('feeStructure', ['title' => 'fee Structure', 'outcome' => $outcome]);
            } catch (\Exception $e) {
                return back()->with('fail', $e->getMessage());
            }
        }

}
