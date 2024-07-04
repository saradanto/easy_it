<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class PageController extends Controller
{
   public function homepage()
  {

      $articles = Article::take(6)->orderBy( 'created_at', 'desc')->get();

     return view('homepage', compact('articles'));


  }


  public function contact()
  {
    return view('contact');
  }

  public function daniele()
  {
    return view('daniele');
  }

  public function juri()
  {
    return view('juri');
  }

}
