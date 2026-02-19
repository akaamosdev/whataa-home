<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Show');
})->name("show");
Route::get('/download-whataa-windows', function () {
    return Inertia::render('Download');
})->name('download');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/landing', function () {
    return Inertia::render('Landing');
})->name("landing");

Route::get('/page', function () {
    return Inertia::render('Show');
})->name("page");


Route::post('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact.send');
Route::get('/download/whataa', [\App\Http\Controllers\HomeController::class, 'downlaodWhataa'])->name('downlaod.whataa');
Route::post('/download/send', [\App\Http\Controllers\HomeController::class, 'downlaodSend'])->name('downlaod.send');
require __DIR__.'/auth.php';
Route::post('/quotes', [QuoteController::class, 'store'])->name('quotes.store');
Route::post('/counter/download', [QuoteController::class, 'countDownload'])->name('counter.download');

