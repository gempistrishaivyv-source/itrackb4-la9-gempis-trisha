<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shoes/featured', [ ShoeController::class, 'featured'])
    ->name('shoes.featured');

Route::get('/shoes/filter/{value?}', [ShoeController::class, 'filter'])
    ->name('shoes.filter');

Route::resource('shoes', ShoeController::class)
    ->only(['index', 'show']);