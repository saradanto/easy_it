<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        return view('revisor.index');
    }
    
    public function lavoraconnoi(){
        return view('lavoraconnoi');
    }
    
    
}