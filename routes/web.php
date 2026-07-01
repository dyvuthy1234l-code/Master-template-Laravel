<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('client.pages.home');
});

Route::get('/home', function () {
    return view('client.pages.home');
})->name('home');

Route::get('/product', function () {
    return view('client.pages.product');
})->name('product');

Route::get('/about', function () {
    return view('client.pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('client.pages.contact');
})->name('contact');
