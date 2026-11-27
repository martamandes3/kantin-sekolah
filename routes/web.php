<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

use App\Http\Controllers\ProfileController;

// Rute Home (URI: /)
Route::get('/', [ProfileController::class, 'home'])->name('home');

// Rute Gallery (URI: /gallery)
Route::get('/gallery', [ProfileController::class, 'gallery'])->name('gallery');

// Rute About (URI: /about)
Route::get('/about', [ProfileController::class, 'about'])->name('about');