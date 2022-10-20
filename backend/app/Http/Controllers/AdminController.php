<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\Course;
use Validator;

class AdminController extends Controller
{

    public function addAdmin(Request $request){

        $admin= new Admin();
  
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password= bcrypt($request->password);
        $admin->type="admin";
        $admin->save();
  
        return response()->json([
          "status" => "Success",
          "message" => "Admin has been added"
        ]);
  
      }

      public function addInstructor(Request $request){

        $instructor= new Instructor();
  
        $instructor->name=$request->name;
        $instructor->email=$request->email;
        $instructor->password= bcrypt($request->password);
        $instructor->type="instructor";
        $instructor->save();
  
        return response()->json([
          "status" => "Success",
          "message" => "Instructor has been added"
        ]);
  
      }

      public function addStudent(Request $request){

        $student= new Student();
  
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password= bcrypt($request->password);
        $student->type="student";
        $student->save();
  
        return response()->json([
          "status" => "Success",
          "message" => "Student has been added"
        ]);
  
      }

      public function addCourse(Request $request){
        $instructor = Instructor::find($request->id);
        $course = $instructor->course()->save(
          new Course(['name' => $request->name])
      );
        
          return response()->json([
            "status" => "Success",
            "message" => "Course has been added"
          ]);
  
      }

      public function getInstructors(){

        $instructors= Instructor::all('name','email');
        return response()->json([
         "status" => "Success",
         "data" => $instructors
       ]);
 
     }

      public function getInstructorsCourses(){

         $instructors= Instructor::all('name','email','course.name','course._id');
         return response()->json([
          "status" => "Success",
          "data" => $instructors
        ]);
  
      }

      public function getStudents(){
        
        $students= Student::all();
        return $students;

      }
  
}