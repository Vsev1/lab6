<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('first');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
});

Auth::routes();

Route::get('catalogue', 'App\Http\Controllers\pagination@products');

Route::get('search', 'App\Http\Controllers\Search@search')->name('search');
