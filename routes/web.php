<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect(route('dashboard.index'));
    });

    Route::get('/home', function () {
        return redirect(route('dashboard.index'));
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Dashboard Routes
require __DIR__ . '/web/dashboard/dashboard.php';


// Users Routes
require __DIR__ . '/web/users/users.php';
