<?php

use App\Http\Controllers\{HomeController, ProfileController, ContactController, TaskController, UploadController, AjaxController};
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('profile', ProfileController::class);
Route::get('contact', ContactController::class);
Route::post('upload', [UploadController::class, 'store'])->name('upload');

// ajax
Route::get('test', [AjaxController::class, 'create']);
Route::post('contact', [AjaxController::class, 'store']);

Route::get('task', [TaskController::class, 'index']);
Route::post('task', [TaskController::class, 'store']);
Route::get('task/{id}/edit', [TaskController::class, 'edit']);
Route::put('task/{id}', [TaskController::class, 'update']);
Route::delete('task/{id}', [TaskController::class, 'destroy']);
