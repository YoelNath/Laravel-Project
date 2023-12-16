<?php

namespace App\Http\Controllers;

use App\Models\parkir;
use Illuminate\Http\Request;

class ParkirController extends Controller
{
   public function index(){
    $data = parkir::all();
    dd($data);
    return view("mahasiswa",compact("data"));
   }
}
