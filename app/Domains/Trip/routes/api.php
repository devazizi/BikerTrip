<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\\Domains\\Trip\\Controller')->group(function () {
    Route::post('trips', 'TripController@createTrip');
});
