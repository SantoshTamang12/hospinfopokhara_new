<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\doctorscontroller;


Route::get('doctors', [doctorscontroller::class, 'index']);
Route::get('add-doctors', [doctorscontroller::class, 'create']);
Route::post('add-doctors', [doctorscontroller::class, 'store']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_doctor_view', [AdminController::class, 'addview']);
