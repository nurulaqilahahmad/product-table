<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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
    $product = Product::get();
    return view('index', compact('product'));
});

Route::post('createProduct', [ProductController::class, 'createProduct']);
// Route::post('createProduct', [ProductController::class, 'createProduct'])->name('index');

Route::get('show-product/{productID}', [ProductController::class, 'showProduct']);
// Route::get('show-product/{productID}', [ProductController::class, 'showProduct'])->name('show-product/{productID}');

Route::get('add-product', function () {
    return view('add-product');
});

Route::get('delete-product/{productID}', [ProductController::class, 'deleteProduct']);

Route::get('edit-product/{productID}', [ProductController::class, 'editProduct']);

Route::get('search', [ProductController::class, 'search']);