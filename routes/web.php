<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PaymentController;

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

Route::get('/payment/create/{bookid}', [PaymentController::class, 'createTransaction'])->name('payment.create');
Route::get('/payment/create/{id}', [PaymentController::class, 'createTransaction'])->name('payment.create');