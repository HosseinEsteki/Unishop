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
//    \Illuminate\Support\Facades\Auth::loginUsingId(2);
    return view('layouts.app');
})->name('home');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::resource('orders', \App\Http\Controllers\Dashboard\OrderController::class);
    Route::resource('wishlist', \App\Http\Controllers\Dashboard\WishListController::class, ['only' => ['index', 'show', 'store', 'destroy']]);
    Route::get('profile', [\App\Http\Controllers\Dashboard\ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [\App\Http\Controllers\Dashboard\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('address', \App\Http\Controllers\Dashboard\UserAddressController::class, ['only' => ['edit', 'update']]);
    Route::resource('tickets', \App\Http\Controllers\Dashboard\TicketController::class);
});
Route::get('about-us', [\App\Http\Controllers\Website\AboutController::class, 'index'])->name('about-us');
Route::get('contact-us', [\App\Http\Controllers\Website\ContactController::class, 'index'])->name('contact-us');
Route::get('search', [\App\Http\Controllers\Website\SearchController::class, 'index'])->name('search');
Route::resource('faqs', \App\Http\Controllers\Website\FaqController::class, ['only' => ['index', 'store']]);
Route::resource('products', \App\Http\Controllers\Website\ProductController::class, ['only' => ['index', 'show']]);
Route::resource('categories', \App\Http\Controllers\Website\CategoryController::class, ['only' => ['index', 'show']]);
Route::resource('cart', \App\Http\Controllers\Website\CartController::class, ['only' => ['index', 'store', 'destroy']]);

Route::get('transportation', [\App\Http\Controllers\Website\TransportationController::class, 'index'])->name('transportation');
Route::resource('subscribe', \App\Http\Controllers\Website\SubscribeController::class,)->only(['index', 'store']);

include_once 'auth.php';
