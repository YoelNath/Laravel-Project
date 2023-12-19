<?php

namespace App\Http\Controllers;

use App\Models\database;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function data(Request $request)
    {
        $request->validate([
            'pw' => "required|min:6",
            "email" => "required|email",
        ]);

        database::create([
            "pw" => $request->pw,
            "email" => $request->email
        ]);
        return view("data-added");
    }
}
