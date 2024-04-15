<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('admin')->group(function () {
    Route::get('/users/index', [UserController::class, "index"])->name('users.index');
    Route::get('/users/create', [UserController::class, "create"])->name('users.create');
    Route::post('/users', [UserController::class, "store"])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/edit/{user}', [UserController::class, "edit"])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/reports/menu', function () {
    return view('reports.menu');
})->middleware(['auth', 'verified'])->name('menu');

Route::get('/reports/report', function () {
    return view('reports.report');
})->middleware(['auth', 'verified'])->name('report');

Route::get('/reports/visual', function () {
    return view('reports.visual');
})->middleware(['auth', 'verified'])->name('visual');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
