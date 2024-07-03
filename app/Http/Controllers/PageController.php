<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
   public function homepage()
  {
     
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