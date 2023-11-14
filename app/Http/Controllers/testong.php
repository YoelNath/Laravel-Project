<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa as test;

class testong extends Controller
{
    public function tampil(){
        $apaaja = test::all();
        return view('layouts.app',['jur'=>$apaaja]);

       
    }
}
