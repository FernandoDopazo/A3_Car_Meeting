<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::resource('/', homepageController::class);
