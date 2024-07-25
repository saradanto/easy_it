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

        <a class="nav-link text-primary rounded-5 mb-5" href="{{route('homepage')}}"><i class="bi bi-arrow-left-short me-2"></i> {{__('category.back')}}</a>

        @forelse ($articles as $article )
            
            <div class="card mx-3 my-3 rounded-3 bg-body-tertiary" style="width: 17rem; min-height: 28rem">
                {{-- <img src="https://dummyimage.com/300x300/d4d4d4/fff" class="card-img-top img-fluid rounded-top-3" alt="..."> --}}
                <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://dummyimage.com/300x300/d4d4d4/fff' }}" alt="Immagine dell'articolo {{$article->title}}" class="card-img-top img-fluid rounded-top-3">
                <div class="card-body py-4">
                    <h5 class="card-title fw-bold h3">{{$article->title}}</h5>
                    <p class="card-text">{{$article->category->name}}</p>
                    <div class="d-flex justify-content-between">
                        <p class="card-text h4 fw-bold">€ {{$article->price}}</p>
                        <p class="rounded-3"><a class="btn btn-primary btn-custom" href="{{route('article.show', ['article' => $article])}}">{{__('category.show')}}</a></p>
                    </div>
                </div>
            </div>
        

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
