<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [MainController::class, 'aboutUs'])->name('about_us');
Route::get('/place', [PlaceController::class, 'place'])->name('place');

Route::get('/catalog/filter?category=all&price=asc', [CatalogController::class, 'catalog'])->name('catalog');
Route::get('/catalog/filter', [CatalogController::class, 'filter'])->name('filter');
Route::get('/catalog/{id}', [ProductController::class, 'product'])->name('product');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add/{id}', [CartController::class, 'addCart'])->name('add_cart');
Route::post('/cart/remove/{id}', [CartController::class, 'removeCart'])->name('remove_cart');
Route::get('/cart/place', [CartController::class, 'cartPlace'])->name('place_cart');
Route::post('/cart/confirm', [CartController::class, 'cartConfirm'])->name('confirm_cart');

