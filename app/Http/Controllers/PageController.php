<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\http\PageController;

class PageController extends Controller
{
    public function show(Article $article)
{

    return view('article.show', compact('article'));
}


public function index()
 {
   $articles = Article::orderBy('created_at', 'desc')->paginate(6); return view('article.index', compact('articles'));
 }
}

public function homepage()
{
    $articles = Article::orderBy('created_at', 'desc')->take(6)->get();
    return view('welcome', compact('articles'));
}