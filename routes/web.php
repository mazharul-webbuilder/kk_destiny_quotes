<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;


// Frontend routes

Route::get('/', [
    QuoteController::class, 'index'
])->name('home');


// Session routes

Route::get('register', [
    SessionController::class, 'register'
])->name('register')->middleware('guest');

Route::post('register/create', [
    SessionController::class, 'createUser'
])->name('user.create')->middleware('guest');;


Route::get('login', [
    SessionController::class, 'login'
])->name('login')->middleware('guest');

Route::post('login', [
    SessionController::class, 'loginToSession'
])->name('user.login')->middleware('guest');

Route::get('logout', [
    SessionController::class, 'logout'
])->name('user.logout')->middleware('auth');


// Search

Route::post('search', [SearchController::class, 'search'])->name('search');


// Backend route
Route::get('admin/settings', [AdminController::class, 'index'])->name('admin.quotes');

Route::post('admin/create/quote', [AdminController::class, 'create'])->name('quote.create');

Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('quote.edit');

Route::post('admin/update/quote/{id}', [AdminController::class, 'update'])->name('quote.update');

Route::get('admin/destroy/quote/{id}', [AdminController::class, 'destroy'])->name('quote.destroy');



