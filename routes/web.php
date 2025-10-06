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


Route::get("getdata",[StudentController::class,"index"])->name("");
Route::get("adddata",[StudentController::class,"adddata"])->name("");
Route::get("deletedata",[StudentController::class,"deletedata"])->name("");
Route::get("update",[StudentController::class,"update"])->name("");

