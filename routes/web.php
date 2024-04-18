<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\loginController;

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::resource('/', homepageController::class);
Route::resource('/login', loginController::class);

