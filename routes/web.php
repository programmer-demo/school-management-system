<?php

use App\Http\Controllers\SettingCottroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/index', function(){
    return view('index');
})->name('index');
Route::resource('user' , UserController::class);
Route::get('students', [StudentController::class ,'index'])->name('student.index');
Route::get('settings', [SettingCottroller::class ,'index'])->name('settings.index');

// Hellow My name is khat luch. I created link My Profile go to User List
route::get('userProfile',[UserProfileController::class ,'userProfile'])->name('userProfile');