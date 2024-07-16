<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Article;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
   public function homepage()
  {

    $articles = Article::where('is_accepted', true)->orderBy( 'created_at', 'desc')->take(6)->get();
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

  public function send(Request $request){
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'description' => 'required',
    ]);

    $data =[
      'nome' => $request->name,
      'email' => $request->input('email'),
      'messaggio' => $request->description
    ];
    Mail::to('dantogas@gmail.com')->send(new ContactMail($data) );
    return redirect()->route('homepage');
  }

  public function setLanguage($lang){

    session()->put('locale', $lang);
    return redirect()->back();
  }



}
