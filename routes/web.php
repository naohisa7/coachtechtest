<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/building', [TestController::class, 'build']);
Route::get('/building/{room}', [TestController::class, 'room']);