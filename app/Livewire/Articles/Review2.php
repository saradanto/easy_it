<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class Review2 extends Component
{

    public $article;
    public $showModal = false;
    public $actionType;

    public function mount()
    {
        $this->loadArticle();
    }

    public function loadArticle()
    {
        $this->article = Article::where('is_accepted', null)->first();
    }

    public function openModal($action)
    {
        $this->actionType = $action;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function confirmAction()
    {
        if ($this->actionType === 'accept') {
            $this->article->setAccepted(true);
            $message = "Hai accettato l'articolo {$this->article->title}";
        } else {
            $this->article->setAccepted(false);
            $message = "Hai rifiutato l'articolo {$this->article->title}";
        }

        $this->closeModal();
        $this->loadArticle();
        session()->flash('message', $message);
    }


    public function render()
    {
        return view('livewire.articles.review2');
    }
}


