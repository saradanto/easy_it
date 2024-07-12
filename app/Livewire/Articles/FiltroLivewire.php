<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class FiltroLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public $categories;
    public $category_id;


    public function mount(){
        $this->categories = Category::all();

    }

    public function setCategory($categoryId){
        $this->category_id = $categoryId;
        $this->search = '';
    }

    public function clearFilters(){
        $this->reset(['search', 'category_id']);
    }

    public function render()
    {

        $query = Article::query();

        if($this->search){
            $query->where('title', 'LIKE', '%' . $this->search . '%')->paginate(6);

        } if ($this->category_id){

            $query->where('category_id', $this->category_id)->paginate(6);

        }
            $articles = $query->orderBy('created_at', 'desc')->paginate(6);

            return view('livewire.articles.filtro-livewire', ['articles' => $articles]);
    }




}
