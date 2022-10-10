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
   
}
