<?php

use App\Http\Controllers\EmployeesControler;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
//Route for invoke 
Route::get('/blog', [EmployeesControler::class, 'index'])->name('blog.index');
Route::get('/', HomeController::class);

// Fallback Route

Route::fallback(FallbackController::class);
