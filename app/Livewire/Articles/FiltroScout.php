<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class FiltroScout extends Component
{
    public $query='';
    public $articles;


    public function render()
    {
        if($this->query){
            $this->articles = Article::search($this->query)->get();
        } else {
            $this->articles = null;
        }

        return view('livewire.articles.filtro-scout');
    }
}
