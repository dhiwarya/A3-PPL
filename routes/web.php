<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CounterController;

Route::get('/increment', [CounterController::class, 'increment']);
Route::get('/decrement', [CounterController::class, 'decrement']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function() {
    return "hello world";
});

Route::get('/counter', [CounterController::class, 'show'])->name('counter.show');

