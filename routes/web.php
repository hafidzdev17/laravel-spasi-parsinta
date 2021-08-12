<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', fn () => '<img src="assets/images/image.png"  width="400" height="400"/>'); // php 7.4


Route::get('/', fn () => view('home')); // php 7.4
Route::get('/profile', fn () => view('profile')); // php 7.4
