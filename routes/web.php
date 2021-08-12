<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', fn () => '<img src="assets/images/image.png"  width="400" height="400"/>');

// php 7.4
Route::get('/', fn () => view('home'));
Route::get('/profile', fn () => view('profile'));
Route::get('/about', fn () => view('about'));
Route::get('/contact', fn () => view('contact'));
