<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateArticleForm extends Component
{
    use WithFileUploads;
    public $images = [];
    public $temporary_images;

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

        $this->article = Article::create([
            'title'=> $this->title,
            'description' => $this->description,
            'price'=> $this->price,
            'category_id'=> $this->category_id,
            'user_id'=> Auth::id()
        ]);

        if (count($this->images) > 0){
            foreach ($this->images as $image){
                $this->article->images()->create(['path' => $image->store('images', 'public')]);
            }
        }

        session()->flash('status', 'Articolo in fase di revisione.');
        $this->cleanForm();
        return redirect()->route('article.index');
    }

    public function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->category_id = '';
        $this->price = '';
        $this->images = [];
    }

    public function updatedTemporaryImages(){
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }

}
