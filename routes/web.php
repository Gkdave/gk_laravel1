<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
//Route for invoke 

Route::get('/blog', [EmployeesController::class, 'index'])->name('blog.index');
Route::get('blog/{id}',[EmployeesController::class,'show'])->name('blog.show');
Route::get('blog/create',[EmployeesController::class,'create'])->name('blog.create');
Route::post('blog/',[EmployeesController::class,'store'])->name('blog.store');
Route::get('/blog/edit/{id}',[EmployeesController::class,'edit'])->name('blog.edit');
Route::patch('/blog/{id}',[EmployeesController::class,'update'])->name('blog.update');
Route::delete('/blog/{id}',[EmployeesController::class,'destroy'])->name('blog.delete');

//home Route
Route::get('/',HomeController::class);
//FallBack Route
Route::fallback(FallbackController::class); 