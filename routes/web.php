<?php

use App\Http\Controllers\EmployeesControler;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route for invoke 
Route::get('/blog', [EmployeesControler::class, 'index'])->name('blog.index');
Route::get('/', HomeController::class);

// Fallback Route

Route::fallback(FallbackController::class);
