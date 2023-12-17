<?php

namespace App\Http\Controllers;


use App\Models\parkir;
use Illuminate\Http\Request;

class ParkirController extends Controller
{
   public function index()
   {
      $parkdata = parkir::all();
      $arraynum = [1, 3, 4, 100];

      return view("welcome", compact("arraynum", "parkdata"));
   }
}
