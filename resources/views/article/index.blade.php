<x-main>

    <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">Ciao {{ Auth::user()->name }}, ecco i tuoi annunci!</h1>
                        {{-- <div class="d-grid gap-1 d-sm-flex justify-content-sm-center justify-content-xl-start">
                          <a href="{{route('article.create')}}" class="btn btn-outline-primary btn-lg me-md-4 rounded-5 px-4">Inserisci un articolo</a>
                          <a class="btn btn-outline-dark btn-lg px-4 rounded-5" href="{{route('notice')}}">Cerca annuncio</a>
                        </div> --}}
                    </div>
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
                {{-- <form class="d-flex" role="search" action="#"
                method="POST">
                <input class="form-control me-2" name="search"
                type="search" placeholder="Cerca Articolo"
                aria-label="Search">
                </form> --}}
                <a href="{{route('article.create')}}" class="btn btn-outline-primary me-md-4 rounded-5">Crea nuovo articolo</a>
                
            </div>
           
        {{-- <table class="table border mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Titolo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)                        
                
                <tr>
                    <th scope="row">#{{$article->id}}</th>
                    <td>
                        <img class="card-img-top" style="width:3rem"
                        src="{{Storage::url($article->image)}}"
                        alt="..." />
                    </td>
                    <td>{{$article->title}}</td>
                    <td>
                        
                        <div
                        class="d-grid gap-2 d-md-flex justify-content-md-end">
                        
                        <a href="{{route('article.show', ['article' => $article->id])}}" class="btn text-black me-md-3"><i class="bi bi-file-earmark h4"></i></a>
                        <a href="{{ route('article.edit', ['article' => $article->id]) }}" class="btn text-black me-md-3"><i class="bi bi-pencil-square h4"></i></a>
                        
                        <form action="{{ route('article.destroy', ['article' => $article->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn text-danger me-md-3"><i class="bi bi-trash-fill h4"></i></button>
                        </form>
                        
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
    
      
    @if (session()->has('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
        
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">


                <div class="accordion" id="accordionExample" style="width: 300px">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-filter me-2"></i> FILTRI
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                
                                <p class="fw-bold">LISTA CATEGORIE</p>
                                
                                @foreach ( $categories as $category )
                                <li class="nav-item"><a class="nav-link my-2 fw-light" href="{{route('byCategory',['category' => $category->id])}}">{{$category->name}}</a></li>
                                
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-12 col-md-9">


                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    @forelse ($articles as $article )      
                    <tr class="h-100">
                        <a href="{{route('article.show', ['article' => $article])}}" class="nav-link">
                        <td><img src="https://dummyimage.com/300x300/d4d4d4/fff" style="height: 100px;" class="img-fluid rounded-3" alt="..."></td>
                        <td>{{ $article->title}}</td>
                        <td>Categoria: {{ $article->category->name}}</td>
                        <td>€ {{ $article->price}}</td>
                        <td>Creato il: {{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</td>
                        </a>
                      </tr>
                    @empty

                    <div class="text-center mt-5 pt-5">
                        <i class="bi bi-exclamation-triangle display-5 mb-2"></i>
                        <p class="fw-normal h3">Nessun annuncio trovato</p>
                    </div>
                    @endforelse
                    </tbody>
                </table>

                <a href="#" class="nav-link">
                <div class="w-100 d-flex justify-content-between align-items-center border rounded-4">
                    <div class="p-2">
                        <img src="https://dummyimage.com/300x300/d4d4d4/fff" style="height: 100px;" class="img-fluid rounded-3" alt="...">
                    </div>
                    <div class="w-100 d-flex align-items-start">
                        <p class="ms-5">Titolo</p>
                        <p class="ms-5">Categoria</p>
                        <p class="ms-5">Prezzo</p>
                        <p class="ms-5">Creato il</p>
                    </div>
                </div>
                </a>


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
                @endforelse --}}

                </div>
                    {{ $articles->links()}}
                </div>

            </div>
        </div>
    </div>

</main>
    
</x-main>