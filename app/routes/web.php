<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () { return view('index'); })->name('index');
Route::get('/404', function () { return view('404'); })->name('404');
Route::get('/about', function () {  return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/news', function () { return view('news'); })->name('news');
Route::get('/gallery', function () { return view('gallery'); })->name('gallery');
// Route::get('/sbike', function () { return view('single_bike'); })->name('sbike');
Route::get('/profile', function () { return view('profile'); })->middleware(['auth', 'verified'])->name('profile');
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/dashboard', function () { 
    return view('dashboard' ); 
})->middleware(['auth', 'checkadmin', 'verified'])->name('dashboard');


Route::controller (ProductController::class)->group (function() {
        Route::get('/product', 'index')->middleware(['auth', 'checkadmin', 'verified'])->name('product');
        Route::get('/product/new',  'create')->middleware(['auth', 'checkadmin', 'verified'])->name('new-product');
        Route::get('/product/edit/{product_id}',  'edit')->middleware(['auth', 'checkadmin', 'verified']);
        Route::get('/product/view/{product_id}',  'show')->middleware(['auth', 'checkadmin', 'verified']);
        Route::get('/product/delete/{product_id}',  'destroy')->middleware(['auth', 'checkadmin', 'verified']);
        Route::get('/product/single/{product_id}', 'single')->name('sbike');
        Route::get('/bikes', 'display')->name('bikes');
        Route::post('/product/create',  'store')->middleware(['auth', 'checkadmin', 'verified'])->name('create');
        Route::post('/product/update/{product_id}',  'update')->middleware(['auth', 'checkadmin', 'verified'])->name('update');
});


Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->middleware(['auth', 'checkadmin', 'verified'])->name('user');
    // Route::get('/user/new', 'create')->middleware(['auth', 'checkadmin', 'verified'])->name('new-user');
    // Route::get('/user/edit/{id}', 'edit')->middleware(['auth', 'checkadmin', 'verified']);
    // Route::get('/user/view/{id}', 'show')->middleware(['auth', 'checkadmin', 'verified']);
    Route::get('/user/ban/{user_id}', 'banUser')->middleware(['auth', 'checkadmin', 'verified']);

    // Route::post('/user/update/{id}', 'update')->middleware(['auth', 'checkadmin', 'verified']);
    // Route::post('/user/create', 'store')->middleware(['auth', 'checkadmin', 'verified']);
});






require __DIR__.'/auth.php';
