<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::resource('article', ArticleController::class);
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/notice', [ArticleController::class, 'notice'])->name('notice');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/daniele', [PageController::class, 'daniele'])->name('daniele');
Route::get('/juri', [PageController::class, 'juri'])->name('juri');

Route::resource('article', ArticleController::class)->middleware('auth');

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

Route::get('/prova', [ArticleController::class, 'paginaProva'])->name('paginaProva');
