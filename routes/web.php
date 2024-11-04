<?php

use App\Http\Controllers\moviesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [moviesController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [moviesController::class, 'create'])->name('movies.create');
Route::post('/movies', [moviesController::class, 'store'])->name('movies.store');
Route::get('/movies/{movies}/edit', [moviesController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movies}', [moviesController::class, 'update'])->name('movies.update');
Route::delete('/movies/{movies}', [moviesController::class, 'destroy'])->name('movies.destroy'); // Tambahkan route untuk delete
