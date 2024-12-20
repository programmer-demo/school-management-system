<?php

use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SettingCottroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::group(['middleware' => ['auth']] , function (){
    Route::get('/', function(){
        return view('index');
    })->name('/');
    Route::resource('user' , UserController::class);
    Route::resource('customer' , CustomerController::class);
    Route::get('students', [StudentController::class,'index'])->name('student.index');
    Route::get('settings', [SettingCottroller::class,'index'])->name('settings.index');
    Route::get('userProfiles',[UserProfileController::class,'index'])->name('userProfile.index');
    Route::get('classrooms', [ClassRoomController::class,'index'])->name('classrooms.index');
    Route::get('subjects', [SubjectController::class,'index'])->name('subjects.index');
    Route::get(uri: 'teachers',action: [TeacherController::class,'index'])->name(name: 'teachers.index');

    //My name is Eang Arn.This my route
    route::get('edit',[SettingCottroller::class,'btnEdit']);
    Route::get('payments', [PaymentController::class,'index'])->name('payments.index');

    // My name is khat luch. This my route.
// Subject
    route::get('form-add',[SubjectController::class,'addSub']);
    route::post('save-sub',[SubjectController::class,'saveSub']);
// Teacher
    route::get('form-teacher',[TeacherController::class,'frmAddTeacher']);
// Studnet
    route::get('form-student',[StudentController::class,'frmAddStudent']);
// Payents
    route::get('form-payment',[PaymentController::class,'frmAddPayment']);
// Class Room
    route::get('form-class-room',[ClassRoomController::class,'frmAddClassRoom']);




    
});

Auth::routes();
