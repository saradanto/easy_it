<?php

use Illuminate\Http\Request;
use app\Http\PageController;

class PageController extends Controller
{
   public function homepage()
  {
     $notices = Notice::take(6)->orderBy('created_at', 'desc')->get();
     return view('homepage');


  }


  public function notice ()

  {
     $notices = Notice::take(6)->orderBy('created_at','desc')->paginate(6);
     return view ('notice');

  }

  public function contact()
  {

    return view('contact');
  }

  }