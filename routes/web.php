<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
use app\Http\Controllers\AricleController

Route::resource('article', ArticleController::class);
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/notice', [PageController::class, 'notice'])->name('notice');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/homepage', [PageController::class, 'homepage'])->name('homepage');

