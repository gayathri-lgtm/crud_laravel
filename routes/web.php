<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/about', function () {
    return view('about');
})->name('/about');

Route::get('/contact', function () {
    return view('contact');
})->name('/contact');


Route::get("getdata",[StudentController::class,"index"])->name("getdata");



Route::get("addtable",[StudentController::class,"addtable"])->name("addtable");
Route::post("adddata",[StudentController::class,"adddata"])->name("adddata");


Route::get("deletedata/{id}",[StudentController::class,"deletedata"])->name("deletedata");


Route::get("updtable/{id}",[StudentController::class,"updtable"])->name("updtable");
Route::post("update/{id}",[StudentController::class,"update"])->name("update");

