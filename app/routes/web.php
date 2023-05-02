<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
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
Route::get('/bikes', function () { return view('bikes'); })->name('bikes');
Route::get('/sbike', function () { return view('single_bike'); })->name('sbike');
Route::get('/profile', function () { return view('profile'); })->middleware(['auth', 'verified'])->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
