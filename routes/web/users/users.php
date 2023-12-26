<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->prefix('users')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('users.index');
    Route::post('store', 'store')->name('users.store');
    Route::get('show/{id}', 'show')->name('users.show');
    Route::get('edit/{id}', 'edit')->name('users.edit');
    Route::post('update/{id}', 'update')->name('users.update');
    Route::delete('delete/{id}', 'delete')->name('users.delete');
});
