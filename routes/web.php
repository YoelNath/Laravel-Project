<?php

use App\Http\Controllers\ParkirController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/exit', function () {
    return view('exit');
})->name('exit');



Route::post('/parkir', [ParkirController::class, 'park'])->name('parkir');




