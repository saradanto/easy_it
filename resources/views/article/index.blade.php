<x-main>

    
    {{-- <main class="container">
        
        <div class="rounded-3 mb-5">
            
            <div class="mt-5 mb-5">
                <div
                class="align-middle gap-2 d-flex justify-content-between mb-5">
                <h3 class="fw-bold">I tuoi articoli</h3>
                <form class="d-flex" role="search" action="#"
                method="POST">
                <input class="form-control me-2" name="search"
                type="search" placeholder="Cerca Articolo"
                aria-label="Search">
                </form>
                <a href="{{route('article.create')}}" class="btn btn-outline-primary me-md-4 rounded-5">Crea nuovo articolo</a>
            </div>
         --}}
    
      
    @if (session()->has('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
        
    @endif



@livewire('articles.index')


                {{-- @forelse ($articles as $article )
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


                <div class="text-center mt-5 pt-5">
                    <i class="bi bi-exclamation-triangle display-5 mb-2"></i>
                    <p class="fw-normal h3">Nessun annuncio trovato</p>
                </div>
                @endforelse

                </div>
                    {{ $articles->links()}}
                </div>

            </div>
        </div>
    </div> --}}

    
</x-main>