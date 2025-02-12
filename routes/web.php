<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;

Route::get('/halls', [HallController::class, 'getHallsWithFacilities']);

Route::get('/', function () {
    return view('welcome');
});
