<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact/end', [ContactController::class, 'add']);
Route::post('/contact/end', [ContactController::class, 'create']);