<x-main>

  <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder mb-2">Aquista e vendi i tuoi articoli preferiti in modo Easy.it</h1>
                    <p class="lead fw-light text-50 mb-4">Qui puoi inserire e gestire i tuoi annunci!</p>
                    <div class="d-grid gap-1 d-sm-flex justify-content-sm-center justify-content-xl-start">
                      <a href="{{route('article.create')}}" class="btn btn-outline-primary btn-lg me-md-4 rounded-5 px-4">Inserisci un annuncio</a>
                      <a class="btn btn-outline-dark btn-lg px-4 rounded-5" href="{{route('notice')}}">Cerca annuncio</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5 ms-5" src="{{URL::asset('assets/cuffie_easy_it.png')}}" alt="..." /></div>
        </div>
    </div>
</header>

<h2 class="h2 fw-bold text-center" style="margin: 200px 0px 50px 0px;">Ultimi annunci</h2>

<div class="container mt-5 d-flex flex-wrap justify-content-center">

  {{-- @for ($i = 0; $i < 4; $i++)
    @if (count($articles) > $i)


      @else
      <div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
        <img src="https://picsum.photos/200/200?random=1" class="card-img-top img-fluid rounded-4" alt="...">
        <div class="card-body">
          <p class="card-text fw-bold">Categoria</p>
          <h5 class="card-title fw-bold">Titolo</h5>
          <p class="card-text">100 €</p>
        </div>
      </div>
    @endif
  @endfor --}}


@forelse ($articles as $article)
<div class="card rounded-5 border-0 mx-5 my-5" style="width: 20rem; height: auto;">
  <img src="https://dummyimage.com/300x300/d4d4d4/fff" class="card-img-top img-fluid rounded-4" alt="...">
  <div class="card-body">
    <p class="card-text fw-bold">{{$article->category->name}}</p>
    <h5 class="card-title fw-bold">{{$article->title}}</h5>
    <p class="card-text">{{$article->price}}</p>
  </div>
</div>
@empty
<div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
  nessun articolo
</div>
@endforelse
      

</div>



  </x-main>
