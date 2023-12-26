<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->prefix('dashboard')->controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard.index');
});
