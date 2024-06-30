<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.homepage');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
