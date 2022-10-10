<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;

Route::group(["prefix"=> "v1"], function(){

    Route::post('/add_admin', [AddController::class, 'addAdmin']);
    Route::post('/add_instructor', [AddController::class, 'addInstructor']);
    Route::post('/add_student', [AddController::class, 'addStudent']);
   
});