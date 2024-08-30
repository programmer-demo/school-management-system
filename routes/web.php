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
<<<<<<< HEAD
Route::get('students', [StudentController::class,'index'])->name('student.index');
Route::get('settings', [SettingCottroller::class,'index'])->name('settings.index');
Route::get('userprofile',[UserProfileController::class,'index'])->name('userprofile.index');
=======
Route::get('students', [StudentController::class ,'index'])->name('student.index');
Route::get('settings', [SettingCottroller::class ,'index'])->name('settings.index');

// Hellow My name is khat luch. I created link My Profile go to User List
route::get('userProfile',[UserProfileController::class ,'userProfile'])->name('userProfile');
>>>>>>> 270ba71097d5024310ebd362e8969dd770425bea
