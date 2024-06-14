<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ImageController;

Route::get('/', [CarController::class, 'index'])->name('index');
Route::get('/dashboard', [CarController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/events/create', [CarController::class, 'events'])->middleware('auth');
Route::post('/events', [CarController::class, 'store']);
Route::get('/events/allEvents', [CarController::class, 'allEvents']);
Route::get('/events/{id}', [CarController::class, 'show']);
Route::post('/events/join/{id}', [CarController::class, 'joinMeet'])->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
