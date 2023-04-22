<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'id' => '1',
        'earning' => '6,800',
        'switch_earning' => '4,100',
        'bookings' => '670',
        'views' => '2,390',
        'switch_credits' => '75,650'
    ];
    return view(
        'dashboard.index',
        [
            'data' => $data
        ]
    );
});
