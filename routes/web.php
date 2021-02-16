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

Route::get('/change/{id}', [\App\Http\Controllers\CurrencyController::class, 'change'])->name('currency');

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', [\App\Http\Controllers\admin\MainController::class, 'index'])->name('admin.home');
        Route::resource('/products', 'ProductController');
        Route::resource('/categories', 'CategoryController');
        Route::resource('/currencies', 'CurrencyController');
        Route::resource('/hotdeals', 'HotDealsController');
        Route::resource('/modifications','ModificationController');
});

Route::group(['middleware' => 'guest'], function (){
    Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\UserController::class, 'signin'])->name('signin');
    Route::get('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
    Route::post('/register', [\App\Http\Controllers\UserController::class, 'signup'])->name('signup');
});

Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
