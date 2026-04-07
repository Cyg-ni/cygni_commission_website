<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::view('/tos', 'tos')->name('tos');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/status', 'status')->name('status');

Route::get('/components/navbar', function() {
    return view ('navbar');
});
