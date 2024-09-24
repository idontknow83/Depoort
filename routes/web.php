<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArtsController;
use App\Http\Controllers\ConsultController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/', [ArtsController::class, 'showArts']);
// Route::get('/', [ClientController::class, 'showClient']);
// Route::get('/', [ConsultController::class, 'showConsult']);

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
