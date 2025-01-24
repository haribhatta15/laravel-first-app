<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

// Home page
Route::get('/', function () {
    return view('home');
});

// Report page
Route::get('/report', function () {
    // Query to count Commercial and Residential properties
    $commercialCount = DB::table('properties')->where('type', 'Commercial')->count();
    $residentialCount = DB::table('properties')->where('type', 'Residential')->count();

    // Pass data to the view
    return view('report', [
        'chartData' => [$commercialCount, $residentialCount]
    ]);
});

Route::resource('properties', PropertyController::class);