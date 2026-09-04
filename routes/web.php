<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shoes', [ShoeController::class, 'index'])
    ->name('shoes.index');

Route::get('/shoes/featured', [ShoeController::class, 'featured'])
    ->name('shoes.featured');

Route::get('/shoes/filter/{value?}', [ShoeController::class, 'filter'])
    ->name('shoes.filter');

Route::get('/shoes/{id}', [ShoeController::class, 'show'])
    ->name('shoes.show');