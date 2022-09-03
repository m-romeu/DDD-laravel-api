<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bike\IndexController;
use App\Http\Controllers\Bike\ShowController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bikes', IndexController::class);
Route::get('/bikes/{id}', ShowController::class);