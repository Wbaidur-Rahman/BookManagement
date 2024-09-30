<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [BookController::class, 'index'])->name('books.index');

Route::get('/{bookid}/show', [BookController::class, 'show'])->name('books.show');

Route::get('/addbook', [BookController::class, 'create'])->name('books.create');

Route::post('/addbook', [BookController::class, 'store'])->name('books.store');