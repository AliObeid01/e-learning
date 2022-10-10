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
          'data' => $admin
      ], 201);
  
      }

      public function addInstructor(Request $request){

        $instructor= new Instructor();
  
        $instructor->name=$request->name;
        $instructor->email=$request->email;
        $instructor->password= bcrypt($request->password);
        $instructor->type="instructor";
        $instructor->save();
  
      return response()->json([
          'data' => $instructor
      ], 201);
  
      }

      public function addStudent(Request $request){

        $student= new Student();
  
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password= bcrypt($request->password);
        $student->type="student";
        $student->save();
  
      return response()->json([
          'data' => $student
      ], 201);
  
      }

      public function getInstructors(){

        $instructors= Instructor::all('name');
        return $instructors;
  
      }


   
}
