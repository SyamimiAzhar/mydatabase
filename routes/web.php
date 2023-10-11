<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'index'])->name('student');

Route::get('/addstudent',[StudentController::class,'addstudent'])->name('addstudent');
Route::post('/insertdata',[StudentController::class,'insertdata'])->name('insertdata');

Route::get('/showdata/{id}',[StudentController::class,'showdata'])->name('showdata');
Route::post('/updatedata/{id}',[StudentController::class,'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}',[StudentController::class,'deletedata'])->name('deletedata');
//export PDF
Route::get('/exportpdf',[StudentController::class,'exportpdf'])->name('exportpdf');
//export excel
Route::get('/exportexcel',[StudentController::class,'exportexcel'])->name('exportexcel');
//import excel
Route::post('/importexcel',[StudentController::class,'importexcel'])->name('importexcel');

