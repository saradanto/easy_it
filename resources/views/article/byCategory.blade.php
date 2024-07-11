<x-main>


    <header class="" style="background-color: #CBE5EE; padding: 100px 0px;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">Articoli per Categoria {{$category->name}}</h1>
                    </div>
                </div>
            </div>
    </header>


    <div class="container mt-5 py-5">
    @forelse ($articles as $article)
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
                        <p class="card-text fw-lighter"><span>{{ $article->created_at->isoFormat('DD MMM YYYY') }}</span></p>
                        {{-- ->locale('it_IT')->isoFormat('DD MMM YYYY') --}}
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
    {{-- <div class="container mt-5 py-5">
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
 --}}



{{-- 
         </div>

         </div>
            </div>
        </div>
    </div> --}}

</x-main>
