<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/notice', [PageController::class, 'notice'])->name('notice');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::resource('article', ArticleController::class);
