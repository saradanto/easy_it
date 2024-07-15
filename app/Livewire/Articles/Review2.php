<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review2 extends Component
{

    public $article_to_check;
    public $showModal = false;
    public $actionType;
    public $lastReviewedArticle = null;






    public function mount()
    {
        $this->loadArticle();
    }

    public function loadArticle()
    {
        $currentUser = Auth::user();


        $this->article_to_check = Article::where('is_accepted', null)->where('user_id', '!=', $currentUser->id)->latest()->first();

    }

    public function openModal($action)
    {
        if($this->article_to_check->user_id === Auth::id()){
            session()->flash('error', 'Non puoi revisionare il tuo stesso articolo.');
            return;
        }

        $this->actionType = $action;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function confirmAction()
    {
        if($this->article_to_check->user_id === Auth::id()){
            session()->flash('error', 'Non puoi revisionare il tuo stesso articolo.');
            $this->closeModal();
            return;
        }
        if ($this->actionType === 'accept') {
            $this->article_to_check->setAccepted(true);
            $message = "Hai accettato l'articolo {$this->article_to_check->title}";
        } else {
            $this->article_to_check->setAccepted(false);
            $message = "Hai rifiutato l'articolo {$this->article_to_check->title}";
        }

        $this->lastReviewedArticle = $this->article_to_check;
        $this->article_to_check = null;
        $this->closeModal();
        $this->loadArticle();
        session()->flash('message', $message);
    }

    public function annulla()
    {
        if ($this->lastReviewedArticle) {
            $this->lastReviewedArticle->is_accepted = null;
            $this->lastReviewedArticle->save();

            session()->flash('message', "L'articolo {$this->lastReviewedArticle->title} è stato riportato allo stato pending.");
            $this->lastReviewedArticle = null;
        }
        if($this->article_to_check === null){
            $this->loadArticle();
        }

    }




    public function render()
    {
        return view('livewire.articles.review2');
    }
}


