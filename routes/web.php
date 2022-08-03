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
    return view('Index');
});

Route::get('company', function () {
    return view('Company');
});

Route::get('integration', function () {
    return view('Integration');
});

Route::get('clientele', function () {
    return view('Clientele');
});

Route::get('solution', function () {
    return view('Solution');
});

Route::get('contact', function () {
    return view('Contactus');
});


Route::get('career', function () {
    return view('Career');
});
