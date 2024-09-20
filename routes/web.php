<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TurnController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Api\V2\SmsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\IsAdmin;


Route::prefix('/admin')->middleware('auth',IsAdmin::class)->group(function(){
    Route::get('/' ,[AdminController::class , 'index']);
    Route::resource('/users' , UserController::class);
    Route::resource('/roles' ,RoleController::class);
    Route::get('/user_roles_create/{id}' ,[UserController::class , 'createUserRoles'])->name('create.user.roles');
    Route::post('/create_user_roles/{id}' , [UserController::class , 'storeUserRoles'])->name("store.user.roles");
    Route::resource('/paitients' , PatientController::class);
    Route::resource('/doctors' ,DoctorController::class);
    Route::resource('/turns' ,TurnController::class);
});

Route::get('/' , [IndexController::class , 'index']);
Route::post('/step2' , [IndexController::class , 'storage'])->name('step2.storage');

Route::get('/sms', [SmsController::class , 'smsCode'])->name('sms');
Route::post('/sendsms' , [SmsController::class ,'sendSms2'])->name('send.sms');
Route::get('/payment' , [PaymentController::class , 'payment'])->name('payment');


