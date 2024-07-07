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
    <div class="col-12 border-2 bg-white p-5 rounded-4" style="width: 1000px"> 
        <a class="nav-link text-primary rounded-5 mb-5" href="{{route('article.index')}}"><i class="bi bi-arrow-left-short me-2"></i>Torna indietro</a>
    @if (session()->has('status'))
        {{ session('status') }}
    @endif
    
    <form wire:submit="store">
        <h3 class="h3 mb-3 mt-5 pt-3">Descrizione</h3>

        <div class="row">
        
                {{-- input titolo --}}
                <div class="form-floating mb-4 col">
                    <input class="form-control border-2" wire:model.blur="title" type="text" id="title">
                    <label class="ms-2" for="title">Titolo</label>
                    @error('title')
                    <div class="alert alert-danger my-3 p-1" role="alert">
                        {{ $message }}
                    </div> 
                    @enderror
                </div>

                {{-- input prezzo --}}
                <div class="form-floating mb-4 col">
                    <input class="form-control border-2" wire:model.blur="price" id="price"></input>
                    <label class="ms-2" for="price">Prezzo</label>
                    @error('price')
                    <div class="alert alert-danger my-3 p-1" role="alert">
                        {{ $message }}
                    </div> 
                    @enderror
                </div>

        </div>

        {{-- input descrizione --}}
        <div class="form-floating mb-5">
            <textarea class="form-control border-2" wire:model.blur="description" style="height: 180px" rows="5"></textarea>
            <label for="description" id="description">Descrizione</label>
            @error('description')
            <div class="alert alert-danger my-3 p-1" role="alert">
                {{ $message }}
            </div> 
            @enderror
        </div>
        <h3 class="h3 mb-3 mt-5 pt-5">Categoria</h3>

        {{-- input categoria --}}
        <div class="mb-5 form-floating d-flex justify-content-center align-items-center">
            <select wire:model.blur="category_id" class="form-select rounded-3 border-2 py-2 px-4" id="category">
                <option value="" selected>Seleziona una categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="alert alert-danger my-3 p-1" role="alert">
                {{ $message }}
            </div> 
            @enderror
        </div>

        <h3 class="h3 mb-3 mt-5 pt-5">File</h3>

        {{-- input file --}}
        <label for="images" class="drop-container mb-5" id="dropcontainer">
            <span class="drop-title">Drop files here</span>
            or
            <input type="file" id="images" class="drop-button">
        </label>
          

        <div class="d-grid d-flex justify-content-center">
            <button class="btn btn-dark rounded-3 mb-5 px-5 py-2" type="submit">Salva</button>
        </div>

    </form>
</div>
</div>
</div>