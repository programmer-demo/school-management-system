<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/index', function(){
    return view('index');
})->name('index');
Route::resource('user' , UserController::class);
Route::get('/students', [StudentController::class ,'index_student'])->name('students');
