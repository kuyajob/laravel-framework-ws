<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/students',[StudentController::class,'index']);
Route::get('/admin/students/create',[StudentController::class,'create']);
Route::post('/admin/students/store',[StudentController::class,'store']);
Route::get('/admin/students/show/{id}',[StudentController::class,'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
