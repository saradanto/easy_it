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
        
        <main class="container mt-5 pt-3">
            @if (session()->has('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            
            @endif
            <div class="d-flex justify-content-between">
                <h3 class="fw-bold h3">I tuoi articoli</h3>
                <a href="{{route('article.create')}}" class="btn btn-dark me-md-4 rounded-3 py-2 px-3"><i class="bi bi-file-earmark-plus me-2"></i>Crea annuncio</a>
            </div>
            <div class="mt-5">
                <div class="row">
                            <div class="col-12 col-md-3">

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button h3 fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                    Cerca
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <form class="d-flex" >
                                                        <input wire:model.live="search" class="form-control me-2" name="search"
                                                        type="search" placeholder="Cerca Articolo"
                                                        aria-label="Search">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header border-bottom-0">
                                                <button class="accordion-button h3 fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                    Categorie
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        <a href="#" wire:click.prevent="clearFilters" class="category-link nav-link">Tutti gli articoli</a>
                                                    </p>
                                                    @foreach ($categories as $category)
                                                    <p class="border-top">
                                                        <a href="" class="nav-link mt-4" wire:click.prevent="setCategory({{$category->id}})" class="category-link">{{$category->name}}</a>
                                                    </p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                            </div>
                            <div class="col-12 col-md-9">
                                
                                
                                @forelse ($articles as $article )
                                <a href="{{route('article.show', ['article' => $article])}}" class="nav-link">
                                    <div class="card mb-3 rounded-4" style="min-width: 16rem; height: 10rem;">
                                        <div class="row g-0">
                                            <div class="col-md-4 p-3" style="height: 10rem; width: 10rem;">
                                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" style="border-radius: 35px" class="img-fluid rounded-3" alt="...">
                                            </div>
                                            <div class="col-md-8 m-0">
                                                <div class="card-body">
                                                    <p class="card-title h4 mb-1">{{ $article->title}}</p>
                                                    <p class="card-text fw-lighter">Categoria: <span class="fw-bolder">{{ $article->category->name}}</span></p>
                                                    <p class="card-text h3 mb-0"><span class="">€ {{ $article->price}}</span></p>
                                                    <p class="card-text fw-lighter"><span>Creato: {{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</span></p>
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
                                
                                
                                
                                
                                
                                {{ $articles->links()}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            
            
            
        </main>
        
    </div>
    