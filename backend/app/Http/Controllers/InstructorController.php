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
        
        $student = Student::find('634566d468fc575d2c09e13b');
        $student->enrollCourse()->attach($request->course_id);

        return response()->json([
            "status" => "Success",
            "message" => "Student has been Enrolled"
        ]);

    }

    public function getInstructorCourses(){
        $data=[];
        $instructor = Instructor::find('63448be9ea3af1e98e0247d7');//
        $data[]=$instructor->course()->get()->pluck('name');
        $students_id=$instructor->course()->get()->pluck('student_id');
        foreach($students_id as $student){
          $data[]=$student_name=Student::whereIn('_id',$student)->get()->pluck('name');
        }

        return $data;
      }

}
