<?php

use App\Http\Controllers\ConsultController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Middleware\CheckIfImageIsUploaded;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/account'], function() {
    Route::get('/info', [UserController::class, 'edit'])->middleware(['auth', 'verified']);
    Route::put('/update', [UserController::class, 'update'])->middleware(['auth', 'permission:users-update']);
    Route::get('/upload', [ImageController::class, 'showForm'])->middleware(['auth', 'verified']);   
    Route::post('/upload', [ImageController::class, 'store'])->middleware(['auth', 'verified']);     
});
Route::get('/Events', [ConsultController::class,'Events'] )->name('Events');

Route::middleware([CheckIfImageIsUploaded::class])->group(function() {
    Route::get('/agenda', [ConsultController::class, 'show']);
    Route::put('/agenda/create', [ConsultController::class, 'create']);
});

Route::get('/consults/create', [ConsultController::class, 'create']);
Route::post('/consults/store', [ConsultController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'users'], function() {
    Route::get('/', [UserController::class, 'show'])->name('users')->middleware(['permission:users-read']);
    Route::get('/delete/{id}', [UserController::class, 'delete'])->middleware(['permission:users-delete']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
