<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
    Route::get('login', [\App\Http\Controllers\Account\AccountController::class, 'login']);
    Route::get('password-recovery', [\App\Http\Controllers\Account\AccountController::class, 'password_recovery']);
    Route::resource('orders', \App\Http\Controllers\Account\OrderController::class);
    Route::resource('wishlist', \App\Http\Controllers\Account\WishListController::class, ['only' => ['index', 'show', 'store', 'destroy']]);
    Route::get('profile', [\App\Http\Controllers\Account\ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [\App\Http\Controllers\Account\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('address', \App\Http\Controllers\Account\UserAddressController::class, ['only' => ['edit', 'update']]);
    Route::resource('tickets', \App\Http\Controllers\Account\TicketController::class);
});
Route::get('about-us', [\App\Http\Controllers\AboutController::class, 'index'])->name('about-us');
Route::get('contact-us', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');
Route::get('search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::resource('faqs', \App\Http\Controllers\FaqController::class, ['only' => ['index', 'store']]);
Route::resource('products', \App\Http\Controllers\ProductController::class, ['only' => ['index', 'show']]);
Route::resource('categories', \App\Http\Controllers\CategoryController::class, ['only' => ['index', 'show']]);
Route::resource('cart', \App\Http\Controllers\CartController::class, ['only' => ['index', 'store', 'destroy']]);
