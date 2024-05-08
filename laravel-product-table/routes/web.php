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
    return view('index');
});

Route::get('show-product', function () {
    return view('show-product');
});

Route::get('add-product', function () {
    return view('add-product');
});

Route::get('edit-product', function () {
    return view('edit-product');
});