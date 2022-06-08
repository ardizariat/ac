<?php

use App\Http\Controllers\Client\AppController;
use Illuminate\Support\Facades\Route;


Route::controller(AppController::class)->group(function () {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/kontak', 'kontak')->name('kontak');
    Route::get('/layanan', 'layanan')->name('layanan');
    Route::get('/layanan/ac-standing', 'layananAcStanding')->name('layanan.detail.ac-standing');
    Route::get('/layanan/misty-fan', 'layananMistyFan')->name('layanan.detail.misty-fan');
    Route::get('/layanan/service-ac', 'layananServiceAc')->name('layanan.detail.service-ac');
});
