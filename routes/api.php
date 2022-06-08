<?php

use App\Http\Controllers\API\Client\ClientController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::controller(ClientController::class)->group(function () {
        Route::get('/layanan', 'layanan');
    });
});
