<?php

namespace App\Http\Controllers;


use App\Models\parkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
         $uniqcode = uniqid();
         parkir::create([
            'code' => $uniqcode,
            'police_number'=> $request -> police_num,
            'entry_time' => now()
         ]);

         return view('welcome', compact('uniqcode'));
       
      }else{   
        
         return Redirect::back()->withErrors(['error' => 'Car is already parked.']);
      }
   }
}
