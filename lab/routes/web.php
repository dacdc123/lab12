<?php

use App\Http\Controllers\BookController;
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


// Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/', [HomeController::class, 'max'])->name('home');

Route::get('/min', [HomeController::class, 'min'])->name('min');

Route::get('/detail/{id}', [BookController::class, 'detail'])->name('detail');

Route::get('/category/{id}', [BookController::class, 'list'])->name('list-book');



// Route::get('/', function () {
//     return view('welcome');
// });
