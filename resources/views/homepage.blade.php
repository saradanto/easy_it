<x-main>
<<<<<<< HEAD
  
  <body style="background-color: rgb(57, 161, 196);">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2 ">
        <div class="col">
          <div class="card h-100 rounded">
            <img src="https://picsum.photos/200/300?random=1"  alt="Image">
            <div class="card-body">
              <h5 class="card-title">oggeti vari</h5>
              <p class="card-text">100</p>
=======

  <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder mb-2">A Bootstrap 5 template for modern businesses</h1>
                    <p class="lead fw-normal text-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    <div class="d-grid gap-1 d-sm-flex justify-content-sm-center justify-content-xl-start">
                      <a href="{{route('article.create')}}" class="btn btn-outline-primary btn-lg me-md-4 rounded-5"><i class="bi bi-plus-circle me-2"></i>Inserisci un articolo</a>
                      <a class="btn btn-outline-dark btn-lg px-4 rounded-5" href="{{route('notice')}}">Cerca annuncio</a>
                    </div>
                </div>
>>>>>>> 41e6556d5753ecf281b485d69a881d01e0b66925
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5 ms-5" src="{{URL::asset('assets/cuffie_easy_it.png')}}" alt="..." /></div>
        </div>
    </div>
</header>

<h2 class="h2 fw-bold text-center" style="margin: 150px 0px">Ultimi annunci</h2>

<div class="container mt-5 d-flex flex-wrap">

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



      <div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
        <img src="https://picsum.photos/200/200?random=1" class="card-img-top img-fluid rounded-4" alt="...">
        <div class="card-body">
          <p class="card-text fw-bold">Categoria</p>
          <h5 class="card-title fw-bold">Titolo</h5>
          <p class="card-text">100 €</p>
        </div>
      </div>

      <div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
        <img src="https://picsum.photos/200/200?random=1" class="card-img-top img-fluid rounded-4" alt="...">
        <div class="card-body">
          <p class="card-text fw-bold">Categoria</p>
          <h5 class="card-title fw-bold">Titolo</h5>
          <p class="card-text">100 €</p>
        </div>
      </div>
      
      <div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
        <img src="https://picsum.photos/200/200?random=1" class="card-img-top img-fluid rounded-4" alt="...">
        <div class="card-body">
          <p class="card-text fw-bold">Categoria</p>
          <h5 class="card-title fw-bold">Titolo</h5>
          <p class="card-text">100 €</p>
        </div>
      </div>
      
      <div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
        <img src="https://picsum.photos/200/200?random=1" class="card-img-top img-fluid rounded-4" alt="...">
        <div class="card-body">
          <p class="card-text fw-bold">Categoria</p>
          <h5 class="card-title fw-bold">Titolo</h5>
          <p class="card-text">100 €</p>
        </div>
      </div>

</div>
  
  

  </x-main>
