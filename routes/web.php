<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/default', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function() {
    
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::get('/testimonial', function () {
        return Inertia::render('Testimonial');
    })->middleware(['auth', 'verified'])->name('testimonial');
    
    Route::get('/blog', function () {
        return Inertia::render('Blog');
    })->middleware(['auth', 'verified'])->name('blog');
    
    Route::get('/users', function () {
        return Inertia::render('Users');
    })->middleware(['auth', 'verified'])->name('users');

    Route::get('/subscribers', function () {
        return Inertia::render('Subscribers');
    })->middleware(['auth', 'verified'])->name('subscribers');

    Route::get('/items', function () {
        return Inertia::render('Items');
    })->middleware(['auth', 'verified'])->name('items');

    Route::get('/packages', function () {
        return Inertia::render('Package');
    })->middleware(['auth', 'verified'])->name('packages');

    Route::get('/sales', function () {
        return Inertia::render('Sales');
    })->middleware(['auth', 'verified'])->name('sales');

    Route::get('/accounting', function () {
        return Inertia::render('Accounting');
    })->middleware(['auth', 'verified'])->name('account');
});

require __DIR__.'/auth.php';

Route::get('/element', function () {
    return view('layouts.elements');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/store', function () {
    return view('items');
});

Route::get('/packages', function () {
    return view('package');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/pruning', function () {
    return view('pruning');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/tiling', function () {
    return view('tiling');
});
Route::get('/services', function () {
    return view('services');
});