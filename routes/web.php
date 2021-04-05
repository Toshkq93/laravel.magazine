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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('home');

Route::get('/category/{slug}', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category');

Route::get('/product/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.index');
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'modal'])->name('product.modal');

Route::get('/change/{id}', [\App\Http\Controllers\CurrencyController::class, 'change'])->name('currency');

Route::get('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('/cart/show', [\App\Http\Controllers\CartController::class, 'show'])->name('cart.show');
Route::get('/cart/getRegions', [\App\Http\Controllers\CartController::class, 'getRegions']);
Route::get('/cart/getCities', [\App\Http\Controllers\CartController::class, 'getCities']);
Route::get('cart/delete', [\App\Http\Controllers\CartController::class, 'delete']);
Route::get('/cart/update', [\App\Http\Controllers\CartController::class, 'update']);

Route::post('/order', [\App\Http\Controllers\OrderController::class, 'saveOrder'])->name('save.order');

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search.index');
Route::get('/search/autocomplite', [\App\Http\Controllers\SearchController::class, 'autocomplite']);
Route::get('filter', [\App\Http\Controllers\SearchController::class, 'filter']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.home');
    Route::resource('/products', 'ProductController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/currencies', 'CurrencyController');
    Route::resource('/hotdeals', 'HotDealsController');
    Route::resource('/modifications', 'ModificationController');
    Route::get('/orders', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders');
    Route::get('/order/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('order.edit');
    Route::get('/order/update/id={id}', [\App\Http\Controllers\Admin\OrderController::class, 'update'])->name('order.update');
    Route::get('/order/delete/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('order.delete');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\UserController::class, 'signin'])->name('signin');
    Route::get('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
    Route::post('/register', [\App\Http\Controllers\UserController::class, 'signup'])->name('signup');
});

Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
