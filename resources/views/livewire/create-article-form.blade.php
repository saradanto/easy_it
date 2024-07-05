<div>
<header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder mb-2">Crea il tuo annuncio</h1>
                    <p class="lead fw-light text-50 mb-4">Qui puoi inserire e gestire i tuoi annunci!</p>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container my-5 py-5 d-flex justify-content-center">
<div class="col-12 border p-5 rounded-5" style="width: 800px"> 
    <a class="btn btn-outline-primary rounded-5 mb-5" href="{{route('article.index')}}"><i class="bi bi-arrow-left-short me-2"></i>Torna indietro</a>
    @if (session()->has('status'))
        {{ session('status') }}
    @endif
    <form wire:submit="store">
        <div class="form-floating mb-5">
            <input class="form-control border-0 border-bottom" wire:model.blur="title" type="text" id="title">
            <label for="title">Titolo</label>
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="form-floating mb-5">
            <input class="form-control border-0 border-bottom" wire:model.blur="description" type="text">
            <label for="description" id="description">Descrizione</label>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div class="form-floating mb-5">
            <input class="form-control border-0 border-bottom" wire:model.blur="price" id="price"></input>
            <label for="price">Price</label>
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div class=" mb-5">
            <select wire:model.blur="category_id" class="form-select rounded-5" aria-label="Default select example" id="category">
                <option value="" selected>Seleziona una categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>


                @endforeach
            </select>
            @error('category_id')
                {{ $message }}
            @enderror
        </div>
        <div class="d-grid">
            <button class="btn btn-outline-primary rounded-5 mb-5" type="submit">Salva</button>
        </div>
    </form>
</div>
</div>
</div>