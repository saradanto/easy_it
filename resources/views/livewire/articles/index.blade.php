<div>
    <header class="" style="background-color: #CBE5EE; padding: 80px 0px;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">Ciao {{Auth::user()->name}}, questa è la tua area personale</h1>
                    </div>
                </div>
            </div>
        </header>
        
        <main class="container mt-5 pt-3">
            @if (session()->has('status'))
            <div class="alert alert-warning" role="alert">
                {{ session('status') }}
            </div>
            
            @endif
            {{-- <div class="d-flex justify-content-between">
                <h3 class="fw-bold h3">I tuoi articoli</h3>
                <a href="{{route('article.create')}}" class="btn btn-dark me-md-4 rounded-3 py-2 px-3 ms-auto"><i class="bi bi-file-earmark-plus me-2"></i>Crea annuncio</a>
                @if (Auth::user()->is_revisor)
                <a href="{{route('revisor.index')}}" class="btn btn-warning me-md-4 rounded-3 py-2 px-3 me-auto"><i class="bi bi-exclamation-triangle-fill me-2"></i></i>Revisiona articoli</a>
                @endif
            </div> --}}
            <div class="mt-5">
                <div class="row">
                    <div class="col-12 col-md-3">
                        
                        
                        {{-- accordion dashboard utente --}}
                        {{-- <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item"> -}}
                                {{-- <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show mt-0" data-bs-parent="#accordionFlushExample"> --}}
                                    <div class="border shadow p-4 rounded-3 bg-white">
                                            <span class="fw-bolder border-bottom-0 ms-0">
                                                <i class="bi bi-person me-2"></i>
                                                Profilo
                                            </span>
                                        <div class="nav-item my-4 pb-2 border-bottom">
                                            <a href="{{route('article.index')}}" class="nav-link">
                                                @if (Auth::user()->is_revisor)
                                                <i class="bi bi-shield-fill-check text-success me-2"></i>
                                                @else
                                                <i class="bi bi-house-door me-2"></i>
                                                @endif
                                                <span class="fw-normal">{{ Auth::user()->name }}</span>
                                            </a>
                                        </div>
                                        @if (Auth::user()->is_revisor)
                                        <div class="nav-item my-4 pb-2 border-bottom border-0">
                                            <a href="{{route('revisor.index')}}" class="nav-link">
                                                <i class="bi bi-eye me-2"></i>
                                                <span class="fw-normal">Sezione revisore</span>
                                            </a>
                                        </div>
                                        @endif
                                        <div class="nav-item my-4 pb-2 border-bottom border-0">
                                            <a href="{{route('article.index')}}" class="nav-link">
                                                <i class="bi bi-house me-2"></i>
                                                <span class="fw-normal">Dashboard</span>
                                            </a>
                                        </div>
                                        <div class="nav-item my-4 pb-2 border-bottom border-0">
                                            <a href="{{route('article.create')}}" class="nav-link">
                                                <i class="bi bi-file-earmark-plus me-2"></i>
                                                Crea annuncio
                                            </a>
                                        </div>
                                        <div class="nav-item my-4 pb-2 border-bottom">
                                            <form action="{{ route('logout')}}" method="POST">
                                                @csrf
                                                <button class="nav-link" type="submit"><i class="bi bi-box-arrow-left me-2"></i> Logout</button>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="border shadow p-4 rounded-3 bg-white mt-3">
                                        <span class="fw-bolder border-bottom-0 ms-0">
                                            <i class="bi bi-filter me-2"></i>
                                            FILTRI
                                        </span>
                                        <div class="my-3">
                                            <h1 class="h5 mt-4">CERCA</h1>
                                            <form class="d-flex" >
                                                <input wire:model.live="search" class="form-control me-2" name="search"
                                                type="search" placeholder="Cerca Articolo"
                                                aria-label="Search">
                                            </form>
                                        </div>

                                        {{-- articoe status --}}

                                        <div class="my-3 mt-5">
                                            <h1 class="h5 mb-4">STATUS ANNUNCI</h1>
                                            <p>
                                                <a href="#" wire:click.prevent="setAcceptanceStatus(null)" class="nav-link">Tutti gli articoli</a>
                                            </p>
                                            <p class="border-top">
                                                <a href="#" wire:click.prevent="setAcceptanceStatus(true)" class="nav-link mt-2">Articoli Accettati</a>
                                            </p>
                                            <p class="border-top">
                                                <a href="#" wire:click.prevent="setAcceptanceStatus(false)" class="nav-link mt-2">Articoli Rifiutati</a>
                                            </p>
                                            <p class="border-top">
                                                <a href="#" wire:click.prevent="setAcceptanceStatus('pending')" class="nav-link mt-2">Articoli in Attesa</a>
                                            </p>
                                        </div>
                                    </div>
                        
                        
                        {{-- accordion filter search --}}
                        <div class="accordion mt-4" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item shadow mb-4">
                                <h2 class="accordion-header">
                                    <button class="accordion-button h3 fw-bolder border-bottom-0" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        CATEGORIE
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body mt-0">
                                        <div class="mb-3 mt-5">
                                            <p>
                                                <a href="#" wire:click.prevent="clearFilters" class="category-link nav-link">Tutti gli articoli</a>
                                            </p>
                                            @foreach ($categories as $category)
                                            <p class="border-top">
                                                <a href="" class="nav-link mt-3" wire:click.prevent="setCategory({{$category->id}})" class="category-link">{{$category->name}}</a>
                                            </p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end accordion filter search --}}
                        
                    </div>
                    <div class="col-12 col-md-9">
                        
                        
                        @forelse ($articles as $article )
                        
                        <a href="{{route('article.show', ['article' => $article])}}" class="nav-link">
                            <div class="card mb-3 rounded-4" style="min-width: 16rem; min-height: 10rem;">
                                <div class="row g-0">
                                    <div class="col-md-4 p-3" style="height: 10rem; width: 10rem;">   
                                        {{-- @for ($i = 0; $i < 1; $i++)
                                        <img src="https://dummyimage.com/300x300/d4d4d4/fff" style="border-radius: 35px" class="img-fluid rounded-3" alt="...">
                                        <img src="https://dummyimage.com/300x300/d4d4d4/fff" style="border-radius: 35px" class="img-fluid rounded-3" alt="...">
                                        @endfor --}}
                                        <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://dummyimage.com/300x300/d4d4d4/fff' }}" alt="Immagine dell'articolo {{$article->title}}" class="img-fluid rounded-3">

                                    </div>
                                    <div class="col-md-8 m-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="card-title h4 mb-1">{{ $article->title}}</p>
                                                    <p class="card-text fw-lighter">Categoria: <span class="fw-bolder">{{ $article->category->name}}</span></p>
                                                    <p class="card-text h3 mb-0"><span class="">€ {{ $article->price}}</span></p>
                                                    <p class="card-text fw-lighter"><span>{{ $article->created_at->isoFormat('DD MMM YYYY') }}</span></p>
                                                    {{-- ->locale('it_IT')->isoFormat('DD MMM YYYY') --}}
                                                </div>
                                                <div class="py-5">
                                                    @if ($article->is_accepted)
                                                    <i class="bi bi-check-circle text-success h4"> <span class="ms-2 h6">Annuncio accettato</span></i>
                                                    @elseif ($article->is_accepted === null)
                                                    <i class="bi bi-exclamation-triangle text-warning h4"> <span class="ms-2 h6">Annuncio in revisione</span></i>
                                                    @elseif (!$article->is_accepted)
                                                    <i class="bi bi-ban text-danger h4"> <span class="ms-2 h6">Annuncio rifiutato</span></i>
                                                    @endif
                                                </div>
                                            </div>
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
                        
                        
                        
                        
                        <div class="w-50">
                            {{ $articles->links()}}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    
    
    
    
</main>

</div>
