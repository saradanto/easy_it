<x-main>
    
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
                <a href="{{route('article.create')}}" class="btn btn-outline-primary me-md-4 rounded-4">Crea nuovo articolo</a>
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
    @forelse ($articles as $article )
       <a href="#" class="nav-link">
        <div class="card mb-3 rounded-5" style="min-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4" style="height: 100px; width: auto;">
                    <img src="https://picsum.photos/600/600.jpg" style="height: 200px; border-radius: 35px" class="img-fluid p-4" alt="...">
                </div>
                <div class="col-md-8 m-0 p-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title}}</h5>
                        <p class="card-text">Categoria: {{ $article->category->name}}</p>
                        <p class="card-text"><small class="text-body-secondary">Prezzo: {{ $article->price}}</small></p>
                        <p class="card-text"><small class="text-body-secondary">Data: {{ $article->created_at}}</small></p>

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
    
</x-main>