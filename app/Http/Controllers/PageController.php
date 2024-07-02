<?php

use Illuminate\Http\Request;
use app\Http\PageController

class PageController extends Controller
{
   public function homepage()
  {
      $notices = Notice::take(6)->OrderBy('create at ' ,'desc' ) get()
      return view('homepage');


  }


  public function notice ()

  {
     return view ('notice');

  }

  public function contact()
  {

    return view('contact');
  }

  }