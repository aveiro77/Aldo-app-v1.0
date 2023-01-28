<?php

use App\Http\Controllers\ProductsPrices;
use App\Http\Controllers\User;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/user', [User::class, 'index']);
Route::get('/dashboard/products', [ProductsPrices::class, 'productsRequest']);
Route::get('/dashboard/prices', [ProductsPrices::class, 'pricesByCountry']);
