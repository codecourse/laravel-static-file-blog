<?php

use App\Http\Controllers\PostIndexController;
use App\Http\Controllers\PostShowController;
use App\Http\Controllers\TagShowController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', PostIndexController::class)->name('posts.index');
Route::get('/{post}', PostShowController::class)->name('posts.show');
Route::get('/tags/{tag}', TagShowController::class)->name('tags.show');
