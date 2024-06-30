<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/store-settings', [App\Http\Controllers\StoreSettingsController::class, 'index'])->name('store-settings');
