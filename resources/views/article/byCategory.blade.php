<x-main>

    <div class="container mt-5 py-5">
        <div class="row">
            <div class="col-12">
                <h1>Articoli per Categoria {{$category->name}}</h1>
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

         </div>
            </div>
        </div>
    </div>

</x-main>
