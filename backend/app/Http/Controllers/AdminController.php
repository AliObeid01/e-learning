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
  
        return $admin;
  
      }

      public function addInstructor(Request $request){

        $instructor= new Instructor();
  
        $instructor->name=$request->name;
        $instructor->email=$request->email;
        $instructor->password= bcrypt($request->password);
        $instructor->type="instructor";
        $instructor->save();
  
        return $instructor;
  
      }

      public function addStudent(Request $request){

        $student= new Student();
  
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password= bcrypt($request->password);
        $student->type="student";
        $student->save();
  
        return $student;
  
      }

      public function getInstructors(){

        $instructors= Instructor::all('name','email');
        return $instructors;
  
      }

      public function addCourse(Request $request){

        $instructor = Instructor::find('6344b517ea3af1e98e0247e2');
        $course = $instructor->course()->save(
           new Course(['name' => $request->name])
        );
        
        return $course;
  
      }

      public function getStudents(){
        
        $students= Student::all('name','email');
        return $students;

      }
      
      public function getCourses(){

        $course= Course::all();
        return $course;

      }

  
}