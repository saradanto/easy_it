<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; 

Route::get('/', [ArticleController::class, 'welcome'])->name('welcome');
Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [ArticleController::class, 'bycategory'])->name('article.bycategory');
