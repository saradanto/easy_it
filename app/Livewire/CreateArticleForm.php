<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticleForm extends Component
{

    #[Validate('required|min:5|max:200')]
    public $title;
    #[Validate('required|min:10|max:1000')]
    public $description;
    #[Validate('required|max:100000000|decimal:2')]
    public $price;
    #[Validate('required')]
    public $category_id;
    public $article;


    public function store(){

        $this->validate();



        Article::create([
            'title'=> $this->title,
            'description' => $this->description,
            'price'=> $this->price,
            'category_id'=> $this->category_id,
            'user_id'=> Auth::id()
        ]);



        session()->flash('status', 'Prodotto aggiunto con successo.');


        $this->cleanForm();

        return redirect()->route('article.index');



    }


    public function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->category_id = '';
        $this->price = '';
    }



    public function render()
    {

        return view('livewire.create-article-form');
    }
}
