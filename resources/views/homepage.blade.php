<x-main>
  
  <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
    <div class="container px-5">
      <div class="row gx-5 align-items-center justify-content-center">
        <div class="col-lg-8 col-xl-7 col-xxl-6">
          <div class="my-5 text-center text-xl-start">
            <h1 class="display-5 fw-bolder mb-2">Acquista e vendi i tuoi articoli preferiti in modo Easy.it</h1>
            <p class="lead fw-light text-50 mb-4">Qui puoi inserire e gestire i tuoi annunci!</p>
            <div class="d-grid gap-1 d-sm-flex justify-content-sm-center justify-content-xl-start">
              <a href="{{route('article.create')}}" class="btn btn-outline-dark btn-lg me-md-4 rounded-3 px-4">Inserisci un annuncio</a>
              <a class="btn btn-dark btn-lg px-4 rounded-3" href="{{route('notice')}}">Cerca annuncio</a>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5 ms-5" src="{{URL::asset('assets/cuffie_easy_it.png')}}" alt="..." /></div>
      </div>
    </div>
  </header>

  @if (session()->has('message'))
    <div class="alert alert-success text-center shadow rounded">
      {{session('message')}}
    </div>
  @endif

  @livewire('articles.filtro-scout')

    <h2 class="h2 fw-bold text-center" style="margin: 200px 0px 50px 0px;">Categorie</h2>
    <div class="container mt-5 px-5 d-flex flex-wrap justify-content-center">
    @forelse ($categories as $category)
      
    <div class="card bg-tertiary border-0 rounded-4" style="width: 12rem; height: 12rem;">
      <div class="card-body d-flex flex-column justify-content-center align-items-center">
        <p class="card-text text-center h3 m-2"><i class="bi bi-car-front-fill"></i></p>
        <h5 class="card-title text-center h5 m-2">{{$category->name}}</h5>
      </div>
    </div>
    @empty
      <p>nessuna categoria</p>
    @endforelse
    
  </div>
  
  <h2 class="h2 fw-bold text-center" style="margin: 200px 0px 50px 0px;">Ultimi annunci</h2>
  <div class="container mt-5 px-5 d-flex flex-wrap justify-content-center">
    
    @forelse ($articles as $article)
    <div class="card rounded-5 border-0 mx-3 my-5 bg-transparent" style="width: 18rem; height: auto;">
      <img src="https://dummyimage.com/300x300/d4d4d4/fff" class="card-img-top img-fluid rounded-3" alt="...">
      <div class="card-body ps-0">
        {{-- <p class="btn btn-sm btn-outline-primary rounded-5 card-text fw-light mx-0">{{$article->category->name}}</p> --}}
        <h5 class="card-title fw-bold h3 text-center">{{$article->title}}</h5>
        <p class="card-text text-center">{{$article->category->name}}</p>
        <p class="card-text text-center h4 fw-bold">€ {{$article->price}}</p>
      </div>
    </div>
    @empty
    <div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
      nessun articolo
    </div>
    @endforelse
    
  </div>
  
  
  
</x-main>
