<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/status', [StatusController::class, 'index'])->name('status');
Route::middleware('auth')->group(function () {
    Route::get('/commissions/{commission}/edit', [CommissionController::class, 'edit'])->name('commissions.edit');
    Route::patch('/commissions/{commission}', [CommissionController::class, 'update'])->name('commissions.update');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});
Route::view('/tos', 'tos')->name('tos');
Route::view('/pricing', 'pricing')->name('pricing');

Route::get('/components/navbar', function() {
    return view ('navbar');
});
