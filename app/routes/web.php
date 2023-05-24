<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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


//  =========================================================================================
//  ========================= EVERY ROUTE IS AS THE SAME   ==================================
//  ========================= AS IN THE VIEWS/RESSOURCES   ==================================
//  =================================== DIRECTORY ===========================================
//  =========================================================================================

Route::view( '/', 'index')->name('index');
Route::view('/404' ,'404' )->name('404');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/terms', 'terms')->name('terms');
Route::view('/email' ,'emails.booking_confirmation')->name('email');
Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(BookingController::class)->group(function () {
    // Route::get('/profile', 'index')->middleware(['auth',  'verified'])->name('profile');
    Route::get('/payement', 'index')->middleware(['auth',  'verified'])->name('payement');
    Route::post('/checkout', 'checkout')->middleware(['auth',  'verified'])->name('checkout');
    Route::get('/success', 'success')->middleware(['auth',  'verified'])->name('success');
    Route::get('/cancel', 'cancel')->middleware(['auth',  'verified'])->name('cancel');
    Route::get('/webhook', 'webhook')->middleware(['auth',  'verified'])->name('webhook');

});

Route::controller(ProfileController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::post('/profile', 'index')->name('profile');
        Route::get('/profile',  'edit')->name('profile.edit');
        Route::patch('/profile',  'update')->name('profile.update');
        Route::delete('/profile',  'destroy')->name('profile.destroy');
    });
});

Route::middleware(['auth', 'checkadmin', 'verified'])->group(function () {
    Route::controller (ProductController::class)->group (function() {
            Route::get('/product', 'index')->name('product');
            Route::get('/product/new',  'create')->name('new-product');
            Route::get('/product/edit/{product_id}', 'edit');
            Route::get('/product/return/{product_id}', 'return');
            Route::get('/product/view/{product_id}', 'show');
            Route::get('/product/delete/{product_id}', 'destroy');
            Route::post('/product/create', 'store')->name('create');
            Route::post('/product/update/{product_id}', 'update')->name('update');
        });
});





Route::get('/product/filter', [ProductController::class, 'filter'])->name('product-filter');
Route::get('/product/sort', [ProductController::class, 'sort'])->name('sortProducts');
Route::post('/user/subscribe', [UserController::class, 'subscribe'])->name('subscribe');




Route::get('/product/single/{product_id}', [ProductController::class, 'single'])->name('bike details');

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->middleware(['auth', 'verified'])->name('cart');
    Route::post('/cart/store', 'store')->middleware(['auth', 'verified'])->name('cart.store');
    Route::post('/cart/delete/{cart_id}', 'deleteCartItem')->middleware(['auth', 'verified'])->name('cart.delete');
    Route::post('/cart/clear/{cart_id}', 'clear')->middleware(['auth', 'verified'])->name('cart.clear');
    Route::get('/bikes', 'index')->name('bikes');
});


Route::controller(LikeController::class)->group(function () {
    Route::get('/like', 'index')->middleware(['auth', 'verified'])->name('like');
    Route::post('/like/store', 'store')->middleware(['auth', 'verified'])->name('like.store');
    Route::post('/like/delete/{like_id}', 'deleteLikeItem')->middleware(['auth', 'verified'])->name('like.delete');
    Route::post('/like/clear/{like_id}', 'clear')->middleware(['auth', 'verified'])->name('like.clear');
    Route::get('/bikes', 'index')->name('bikes');
});



Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->middleware(['auth', 'checkadmin', 'verified'])->name('user');
    Route::post('/contact/send/', 'contact')->middleware(['auth', 'verified']);
    // Route::get('/user/new', 'create')->middleware(['auth', 'checkadmin', 'verified'])->name('new-user');
    // Route::get('/user/edit/{id}', 'edit')->middleware(['auth', 'checkadmin', 'verified']);
    // Route::get('/user/view/{id}', 'show')->middleware(['auth', 'checkadmin', 'verified']);
    Route::get('/user/ban/{user_id}', 'banUser')->middleware(['auth', 'checkadmin', 'verified']);
    // Route::post('/user/update/{id}', 'update')->middleware(['auth', 'checkadmin', 'verified']);
    // Route::post('/user/create', 'store')->middleware(['auth', 'checkadmin', 'verified']);

});






// Route::get('/news', function () { return view('news'); })->name('news');
// Route::get('/sbike', function () { return view('single_bike'); })->name('sbike');



require __DIR__.'/auth.php';
