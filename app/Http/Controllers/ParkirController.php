<?php

namespace App\Http\Controllers;


use App\Models\parkir;
use Illuminate\Http\Request;

class ParkirController extends Controller
{
   public function park(Request $request)
   {
      $request ->validate([  
         "police_num"=> "required|string",
      ]);
      $parkres = parkir::wherenull('exit_time')
      ->where('police_number', $request -> police_num)
      ->get();

      if($parkres -> isEmpty()){

      }else{   
         $code = uniqid();
         
            
      }
   }
}
