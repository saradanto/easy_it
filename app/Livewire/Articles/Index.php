<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $categories;
    public $category_id;
    public $acceptanceStatus = null;
    public $unreviewed_count;



    public function mount(){
        $this->categories = Category::all();
        $this->updateUnreviewedCount();
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

    public function updateUnreviewedCount()
    {
        $this->unreviewed_count = Article::whereNull('is_accepted')->where('user_id', '!=', auth()->id())->count();
    }

    public function render()
    {
        $query = Article::where('user_id', auth()->id())
                        ->orWhere(function ($q) {
                            $q->where('user_id', '!=', auth()->id())
                            ->whereNull('is_accepted');
                        });

        if ($this->search) {
            $query->where('title', 'LIKE', '%' . $this->search . '%');
        }

        if ($this->category_id) {
            $query->where('category_id', $this->category_id);
        }

        if ($this->acceptanceStatus !== null) {
            $query->when($this->acceptanceStatus === 'pending', function ($q) {
                $q->whereNull('is_accepted');
            }, function ($q) {
                $q->where('is_accepted', $this->acceptanceStatus);
            });
        }

        $articles = $query->latest()->paginate(6);

        return view('livewire.articles.index', [
            'articles' => $articles,
            'unreviewed_count' => $this->unreviewed_count
        ]);
    }
}
