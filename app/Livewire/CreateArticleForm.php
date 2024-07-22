<?php

namespace App\Livewire;

use App\Jobs\ResizeImage;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;
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
    #[Validate('required|max:100000000')]
    public $price;
    #[Validate('exists:categories,id',message:'Category is not valid')]
    public $category_id;
    public $article;


    public function store(){

        $this->validate();

        /* $this->authorize('update', Category::findOrFail($this->category_id)); */

        $this->article = Article::create([
            'title'=> $this->title,
            'description' => $this->description,
            'price'=> $this->price,
            'category_id'=> $this->category_id,
            'user_id'=> Auth::id()
        ]);

        if (count($this->images) > 0){
            foreach ($this->images as $image){
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);

                dispatch(new ResizeImage($newImage->path, 300, 300));
            }

            File::deleteDirectory(storage_path("/app/livewire-tmp"));
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
        if(count($this->temporary_images) + count($this->images) > 6){
            throw ValidationException::withMessages(['temporary_images' => 'Hai caricato troppe immagini']);
        } else{

            if($this->validate(
                [
                'temporary_images.*' => 'image|max:1024',
                ])) {
                    foreach($this->temporary_images as $image){
                        $this->images[] = $image;
                    }
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
