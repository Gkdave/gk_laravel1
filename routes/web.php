<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
//Route for invoke 
Route::prefix('/blog')->group(function(){
  Route::get('/create',[EmployeesController::class,'create'])->name('blog.create');
  Route::get('/', [EmployeesController::class, 'index'])->name('blog.index');
  Route::get('/{id}',[EmployeesController::class,'show'])->name('blog.show');
  Route::post('/',[EmployeesController::class,'store'])->name('blog.store');
  Route::get('/edit/{id}',[EmployeesController::class,'edit'])->name('blog.edit');
  Route::patch('/{id}',[EmployeesController::class,'update'])->name('blog.update');
  Route::delete('/{id}',[EmployeesController::class,'destroy'])->name('blog.delete');
});



//home Route
Route::get('/',HomeController::class);
//FallBack Route
Route::fallback(FallbackController::class); 