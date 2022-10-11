<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\Course;

class InstructorController extends Controller
{

    public function enrollStudent(Request $request) {
        
        $student = Student::find('63437b9d53d1d266870ce993');
        $student->enrollments()->attach($request->course_id);

        return response()->json([
            "status" => "Success",
            "message" => "Student has been Enrolled"
        ]);

    }  

}
