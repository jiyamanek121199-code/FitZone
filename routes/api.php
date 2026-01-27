<?php

use App\Http\Controllers\Api\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded within a group which is assigned the "api" middleware
| group.
|
*/

// Contact form submission endpoint
Route::post('/contact', [ContactController::class, 'store']);

// Optional: Get all submissions (for admin)
Route::get('/contacts', [ContactController::class, 'index']);
