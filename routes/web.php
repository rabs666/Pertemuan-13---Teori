<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'dashboard']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/blank-page', [PageController::class, 'blankPage']);
