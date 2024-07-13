<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class FiltroLivewire extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $search = '';
    public $categories;
    public $category_id;


    public function mount(){
        $this->categories = Category::all();

    }

    public function setCategory($categoryId){
        $this->category_id = $categoryId;
        $this->search = '';
        $this->resetPage();
    }

    public function clearFilters(){
        $this->reset(['search', 'category_id']);
        $this->resetPage();
    }


    public function render()
    {

        $query = Article::query();

        if($this->search){
            $query->where('title', 'LIKE', '%' . $this->search . '%');

        } if ($this->category_id){

            $query->where('category_id', $this->category_id);

        }
            $articles = $query->orderBy('created_at', 'desc')->paginate(6);

            return view('livewire.articles.filtro-livewire', ['articles' => $articles]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategoryId()
    {
        $this->resetPage();
    }




}
