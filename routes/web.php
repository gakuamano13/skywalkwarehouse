<?php

use Illuminate\Support\Facades\Route;

// Controllers in Order
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LineItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\Login\LoginController;
use App\Http\Controllers\Auth\Register\RegisterController;



Route::group(['prefix' => 'main', 'as' => 'product.'], function() {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/product/{id}', [ProductController::class, 'show'])->name('show');
});

// Route::get('/auth/login', function () {
//     return view('auth.login.index');
// });

Route::get('/', function () {
    return view('pages.index');
});

// 認証ページ（LOGIN / REGISTER）

Route::group(['prefix' => 'user/', 'as' => 'auth.'], function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
});

// Route::view('/auth/test/login', 'auth.login.index');
// viewを直指定するやつ


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'auth:admins','prefix' => 'dashboard/users', 'as' => 'dashboard.users.'], function() {
//     Route::get('/',[UserController::class, 'index'])->name('index');
// });

Route::group(['prefix' => 'line_item', 'as' => 'line_item.'], function() {
    Route::post('/create', [LineItemController::class, 'create'])->name('create');
    Route::post('/delete', [LineItemController::class, 'delete'])->name('delete');
});

Route::group(['middleware' => 'auth','prefix' => 'cart', 'as' => 'cart.'], function() {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/success', [CartController::class, 'success'])->name('success');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
