<?php

use App\Http\Controllers\SettingCottroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::group(['middleware' => ['auth']] , function (){
    Route::get('/index', function(){
        return view('index');
    })->name('index');
    Route::resource('user' , UserController::class);
    Route::get('students', [StudentController::class,'index'])->name('student.index');
    Route::get('settings', [SettingCottroller::class,'index'])->name('settings.index');
    Route::get('userProfile/index',[UserProfileController::class,'index'])->name('userProfile.index');
    Route::get('userLogin/index',[UserProfileController::class,'login'])->name('userLogin.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
