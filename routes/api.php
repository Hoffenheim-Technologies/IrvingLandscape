<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(TestimonialController::class)->group(function() {
    Route::get('/testimonials', 'index');
    Route::get('/testimonials/{id}', 'show');
    Route::post('/testimonials', 'store');
    Route::delete('/testimonials/{id}', 'delete');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/users', 'index');
    Route::get('/users/{id}', 'show');
    Route::delete('/users/{id}', 'delete');
});
