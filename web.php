

<?php

use Illuminate\Support\Facades\Route;

// NovaWear Homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');
