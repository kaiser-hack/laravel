<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;


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


Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');



Route::view('/contacto', 'contact')->name('contact');

Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/crear', [ProjectController::class,'create'])->name('projects.create');
Route::post('/portafolio', [ProjectController::class,'store'])->name('projects.store');
Route::get('/portafolio/{project}', [ProjectController::class,'show'])->name('projects.show');

Route::get('/categoria/{category}', [ProjectController::class,'categoriashow'])->name('categories.show');



Route::get('/portafolio/{project}/editar', [ProjectController::class,'edit'])->name('projects.edit');

Route::patch('/portafolio/{project}', [ProjectController::class,'update'])->name('projects.update');
Route::delete('/portafolio/{project}', [ProjectController::class,'destroy'] )->name('projects.destroy');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
