<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;

class AddController extends Controller
{

    public function addAdmin(Request $request){

        $admin= new Admin();
  
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password= bcrypt($request->password);
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
        $instructor->save();
  
      return response()->json([
          'data' => $instructor
      ], 201);
  

      }


   
}
