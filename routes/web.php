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
    return view(view: 'site.home');
})->name('site.home');

Route::get('/flybridge', function () {
    return view(view: 'site.flybridge');
})->name('site.flybridge');

Route::get('/grande', function () {
    return view(view: 'site.grande');
})->name('site.grande');

Route::get('/azimuts', function () {
    return view(view: 'site.azimuts');
})->name('site.azimuts');