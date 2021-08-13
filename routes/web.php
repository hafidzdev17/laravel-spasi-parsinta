<?php

use App\Http\Controllers\{HomeController, ProfileController, ContactController, TaskController};
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('profile', ProfileController::class);
Route::get('contact', ContactController::class);


Route::get('task', [TaskController::class, 'index']);
Route::post('task', [TaskController::class, 'store']);
Route::get('task/{id}/edit', [TaskController::class, 'edit']);
Route::put('task/{id}', [TaskController::class, 'update']);
Route::delete('task/{id}', [TaskController::class, 'destroy']);
