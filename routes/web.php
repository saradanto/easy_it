<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/articles', [PageController::class, 'index'])->name('article.index');
Route::get('/article/{article}', [PageController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [PageController::class, 'bycategory'])->name('article.bycategory');
