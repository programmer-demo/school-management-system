<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Route::group(['middleware' => ['auth']] , function (){
    Route::get('/index', function(){
        return view('index');
    })->name('index');
    Route::resource('user' , UserController::class);
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
