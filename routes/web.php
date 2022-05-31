<?php

use App\Http\Controllers\Client\AppController;
use Illuminate\Support\Facades\Route;


Route::controller(AppController::class)->group(function () {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/kontak', 'kontak')->name('kontak');
});
