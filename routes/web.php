<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::controller(BooksController::class)->group(function () {
    Route::post('/books', 'store');
    Route::patch('/books/{book}', 'update');
});

