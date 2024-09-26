<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WishlistController;


    Route::get('/', function(){
    return view('pages.home');
})->name('home');

Route::get('/book', function (){
    return view('pages.plp');
})->name('plp');

Route::get('/book/{i}', function () {
    return view('pages.pdp');
})->name('pdp');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/my-profile', [UserProfileController::class, 'index'])->name('my-profile');


Route::get('/payment/create/{id}', [PaymentController::class, 'createTransaction'])->name('payment.create');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
Route::post('/wishlist/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');
Route::get('/wishlist/get', [WishlistController::class, 'getWishlist'])->name('wishlist.get');

