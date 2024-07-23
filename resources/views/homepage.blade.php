<x-main>
  
  <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
    <div class="container px-5">
      <div class="row gx-5 align-items-center justify-content-center">
        <div class="col-lg-8 col-xl-7 col-xxl-6">
          <div class="my-5 text-center text-xl-start">
            <h1 class="display-5 fw-bolder mb-2">{{__('view.buySellEasy')}}</h1>
            <p class="lead fw-light text-50 mb-4">{{__('view.insertAds')}}</p>
            <div class="d-grid gap-1 d-sm-flex justify-content-sm-center justify-content-xl-start">
              <a href="{{route('article.create')}}" class="btn btn-outline-dark btn-lg me-md-4 rounded-3 px-4">{{__('view.insertAd')}}</a>
              <a class="btn btn-dark btn-lg px-4 rounded-3" href="{{route('notice')}}">{{__('view.searchAd')}}</a>
            </div>
          </div>
        </div>
        {{-- <div data-aos="flip-up"> --}}
          <div data-aos="flip-left"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="2000" class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5 ms-5" src="{{URL::asset('assets/cuffie_easy_it.png')}}" alt="..." /></div>
          {{-- </div> --}}
        </div>
      </div>
    </header>
    
    @if (session()->has('message'))
    <div class="alert alert-success text-center shadow rounded">
      {{session('message')}}
    </div>
    @endif
    
    @livewire('articles.filtro-scout')
    
    <h2 class="h2 fw-bold text-center" style="margin: 200px 0px 50px 0px;">{{__('view.category')}}</h2>
    <div data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000" class="container mt-5 px-5 d-flex flex-wrap justify-content-center">
      @forelse ($categories as $category)
      <a href="#" class="nav-link">
        <div class="card bg-tertiary border-0 rounded-4 m-4 shadow" style="width: 12rem; height: 12rem;">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <p class="card-text text-center h3 m-2"><i class="bi bi-car-front-fill"></i></p>
            <h5 class="card-title text-center h5 m-2">{{__("category.$category->name")}}</h5>
          </div>
        </div>
      </a>
      @empty
      <p>nessuna categoria</p>
      @endforelse
      
    </div>
    
    <h2 class="h2 fw-bold text-center" style="margin: 200px 0px 50px 0px;">{{__('view.lastAds')}}</h2>
    <div class="container mt-5 px-5 d-flex flex-wrap justify-content-between gap-3">
      
      @forelse ($articles as $article)
      {{-- <div class="card rounded-5 border-0 mx-3 my-5 bg-transparent" style="width: 18rem; height: auto;">
        <img src="https://dummyimage.com/300x300/d4d4d4/fff" class="card-img-top img-fluid rounded-3" alt="...">
        <div class="card-body ps-0">
          <p class="btn btn-sm btn-outline-primary rounded-5 card-text fw-light mx-0">{{$article->category->name}}</p>
          <h5 class="card-title fw-bold h3 text-center">{{$article->title}}</h5>
          <p class="card-text text-center">{{$article->category->name}}</p>
          <p class="card-text text-center h4 fw-bold">€ {{$article->price}}</p>
        </div>
      </div> --}}
      
      <div class="card my-5 rounded-3 bg-body-tertiary" style="min-width: 16rem;">
        
        <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://dummyimage.com/300x300/d4d4d4/fff' }}" alt="Immagine dell'articolo {{$article->title}}" class="card-img-top img-fluid rounded-top-3">
        
        {{-- <img src="https://dummyimage.com/300x300/d4d4d4/fff" class="card-img-top img-fluid rounded-top-3" alt="..."> --}}
        
        <div class="card-body py-4">
          <h5 class="card-title fw-bold h3">{{$article->title}}</h5>
          <p class="card-text">{{$article->category->name}}</p>
          <div class="d-flex justify-content-between">
            <p class="card-text h4 fw-bold">€ {{$article->price}}</p>
            <p class="rounded-3"><a class="btn btn-primary btn-custom" href="{{route('article.show', ['article' => $article])}}">{{__('view.visualize')}}</a></p>
          </div>
        </div>
      </div>
      
      @empty
      <div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
        {{__('view.noArticles')}}
      </div>
      @endforelse
      
    </div>
    
    <a class="nav-link text-primary text-center rounded-5 mb-5" href="{{route('notice')}}"> {{__('category.showAll')}}<i class="bi bi-arrow-right-short ms-2 h2"></i></a>
    
  </x-main>
  