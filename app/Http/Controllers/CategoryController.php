<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
        public function index($category = null)
        {
            
            if ($category) {
                $products = Product::where('category', $category)->get();
            } else {
                
                $products = Product::all();
            }
    
            return view('homepage', ['category' => $category, 'products' => $products]);
        }
    }

