<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patients',[HomeController::class,'patients']);
Route::get('/doctors',[HomeController::class,'doctors']);
Route::get('/all',[HomeController::class,'all']);


