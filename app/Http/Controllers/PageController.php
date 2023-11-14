<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\jurusan as jurusan;
use App\Models\mahasiswa as mahasiswa;
use App\Models\kampus_binus as kampus;

class PageController extends Controller
{
    public function home(){
        return view('layouts.homes');
    }

    public function mahasiswa(){
        $jurusan = jurusan::all();
        $dtmahasiswa = mahasiswa::all();
        return view('layouts.mahasiswa',['jur'=>$jurusan, 'mhs'=>$dtmahasiswa]);
    }
}
