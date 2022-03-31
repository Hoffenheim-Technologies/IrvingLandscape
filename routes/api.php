<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PackageController;
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

Route::controller(SubscriberController::class)->group(function() {
    Route::get('/subscribers', 'index');
    Route::get('/subscribers/{id}', 'show');
    Route::post('/subscribers', 'store');
});

Route::controller(ItemsController::class)->group(function() {
    Route::get('/items', 'index');
    Route::get('/items/{id}', 'show');
    Route::post('/items', 'store');
    Route::delete('/items/{id}', 'delete');
});

Route::controller(AccountController::class)->group(function() {
    Route::get('/accounts', 'index');
    Route::get('/accounts/total', 'total');
    Route::get('/accounts/{id}', 'show');
    Route::post('/accounts', 'store');
    Route::delete('/accounts/{id}', 'delete');
});

Route::controller(PackageController::class)->group(function() {
    Route::get('/packages', 'index');
    Route::get('/packages/{id}', 'show');
    Route::post('/packages', 'store');
    Route::delete('/packages/{id}', 'delete');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/users', 'index');
    Route::get('/users/{id}', 'show');
    Route::delete('/users/{id}', 'delete');
});
