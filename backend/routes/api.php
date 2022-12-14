<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;

Route::group(["prefix"=> "v1"], function(){

    Route::post('/add_admin', [AdminController::class, 'addAdmin']);
    Route::post('/add_instructor', [AdminController::class, 'addInstructor']);
    Route::post('/add_student', [AdminController::class, 'addStudent']);
    Route::post('/add_course', [AdminController::class, 'addCourse']);
    Route::get('/instructors', [AdminController::class, 'getInstructors']);
    Route::get('/instructors_courses', [AdminController::class, 'getInstructorsCourses']);
    Route::get('/students', [AdminController::class, 'getStudents']);

});