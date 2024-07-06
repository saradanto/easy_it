<div>
    <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">Lista annunci</h1>

                </div>
            </div>
        </div>
    </header>

    <main class="container">

        <div class="rounded-3 mb-5">

            <div class="mt-5 mb-5">
                <div
                class="align-middle gap-2 d-flex justify-content-between mb-5">
                <h3 class="fw-bold">I tuoi articoli</h3>
                <form class="d-flex" wire:model.live="search">
                <input class="form-control me-2" name="search"
                type="search" placeholder="Cerca Articolo"
                aria-label="Search">
                </form>

                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Categories
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    <a href="#" wire:click.prevent="clearFilters" class="category-link">
                                        Tutti gli articoli
                                    </a>
                                </p>
                                @foreach ($categories as $category)
                                    <p>
                                        <a href="" wire:click.prevent="setCategory({{$category->id}})" class="category-link">{{$category->name}}</a>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{--
 --}}
                <a href="{{route('article.create')}}" class="btn btn-outline-primary me-md-4 rounded-5">Crea nuovo articolo</a>
            </div>

    @if (session()->has('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>

    @endif

    @forelse ($articles as $article )
       <a href="{{route('article.show', ['article' => $article])}}" class="nav-link">
        <div class="card mb-3 rounded-5" style="min-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4" style="height: 100px; width: auto;">
                    <img src="https://dummyimage.com/300x300/d4d4d4/fff" style="height: 200px; border-radius: 35px" class="img-fluid p-4" alt="...">
                </div>
                <div class="col-md-8 m-0 p-4">
                    <div class="card-body">
                        <h4 class="card-title">{{ $article->title}}</h4>
                        <p class="card-text">Categoria: {{ $article->category->name}}</p>
                        <h4 class="card-text p-0 m-0"><span class="">€ {{ $article->price}}</span></h4>
                        <p class="card-text p-0 m-0"><span class="">Creato il: {{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @empty
       Nessun articolo inserito
    @endforelse





</div>
 {{ $articles->links()}}
</div>

</main>

</div>
