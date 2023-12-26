<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->prefix('users')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('users.index');
});
