<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;


class Index extends Component
{



    public $search = '';
    public $categories;
    public $category_id;
    public $acceptanceStatus = null;



    public function mount(){
        $this->categories = Category::all();

    }

    public function setCategory($categoryId){
        $this->category_id = $categoryId;
        $this->search = '';
    }

    public function setAcceptanceStatus($status)
    {
        if ($status === 'pending') {
            $this->acceptanceStatus = 'pending';
        } elseif ($status === true || $status === false) {
            $this->acceptanceStatus = $status;
        } else {
            $this->acceptanceStatus = null;
        }
    }

    public function clearFilters(){
        $this->reset(['search', 'category_id', 'acceptanceStatus']);
    }

    public function render()
    {

        $query = Article::query();

        if($this->search){
            $query->where('title', 'LIKE', '%' . $this->search . '%')->paginate(6);

        } if ($this->category_id){

            $query->where('category_id', $this->category_id)->paginate(6);

        }  if ($this->acceptanceStatus !== null) {
            if($this->acceptanceStatus === 'pending'){
                $query->whereNull('is_accepted');
            } else {
                $query->where('is_accepted', $this->acceptanceStatus);
            }

        }
            $articles = $query->orderBy('created_at', 'desc')->paginate(6);


        return view ('livewire.articles.index', ['articles' => $articles]);
    }
}
