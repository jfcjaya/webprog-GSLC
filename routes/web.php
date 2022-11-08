<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/spending', function() {
    $spend = [
        "Uang Kuliah" => 2000,
        "Sewa Kos" => 300,
        "Makanan" => 200,
        "Listrik" => 50,
        "Transportasi" => 50,
        "Hiburan" => 500
    ];

    return view('spending')
        -> with('spending', $spend)
        -> with('budget', '3000');
});

Route::get('/income', function() {
    $income = [];

    return view('income')
        -> with('income', $income)
        -> with('budget', '3000');
});