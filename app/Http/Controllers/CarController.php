<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('index');
    }

    public function dashboard(){
        return view('dashboard');
    }
}