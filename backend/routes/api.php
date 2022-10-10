<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;

Route::group(["prefix"=> "v1"], function(){

    Route::post('/add_admin', [AddController::class, 'addAdmin']);
   
});