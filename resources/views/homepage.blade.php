<x-main>
  
  <body style="background-color: rgb(57, 161, 196);">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2 ">
        <div class="col">
          <div class="card h-100 rounded">
            <img src="https://picsum.photos/200/300?random=1"  alt="Image">
            <div class="card-body">
              <h5 class="card-title">oggeti vari</h5>
              <p class="card-text">100</p>
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
