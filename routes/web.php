<?php

use Illuminate\Support\Facades\Route;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
Route::get('/', 'App\Http\Controllers\loginController@log');//lohin page

Route::get('/dashboard', 'App\Http\Controllers\studentsboardController@students');//students dashboard
Route::get('/dashboard2','App\Http\Controllers\parentsController@parents');//parents dashboard
Route::get('/invoice', 'App\Http\Controllers\feesController@invoice');//fee invoice
Route::get('/structure', 'App\Http\Controllers\feesController@structure');//fee structure
Route::get('/payment', 'App\Http\Controllers\paymentController@pay');//payment history
Route::get('/study','App\Http\Controllers\studyController@study');//study materials
Route::get('/work', 'App\Http\Controllers\homeworkController@works');//home works
Route::get('/notice', 'App\Http\Controllers\noticeboardController@notice');//notice board
Route::get('/event', 'App\Http\Controllers\eventController@event');//Events

Route::get('/classt', 'App\Http\Controllers\classtableController@class');//Class Table
Route::get('/livec', 'App\Http\Controllers\liveclassController@live');//live class
Route::get('/books', 'App\Http\Controllers\bookiusedController@book');//books issued 
Route::get('/examt', 'App\Http\Controllers\examtController@exam');//exam table
Route::get('/admit', 'App\Http\Controllers\admitController@admit');//admit card
Route::get('/examr', 'App\Http\Controllers\examrController@report');//report card
Route::get('/cert', 'App\Http\Controllers\certController@cert');//certification
Route::get('/attend', 'App\Http\Controllers\attendController@attend');//attendance

Route::get('/req', 'App\Http\Controllers\reqController@req');//request
Route::post('/req','App\Http\Controllers\reqController@save');

Route::get('/student/invoice-details/{InvoiceID}/{InvoiceNumber}', 'App\Http\Controllers\feesController@invoiceDetails');//request


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
