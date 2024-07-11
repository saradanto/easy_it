<x-main>
    
    <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">Annunci</h1>
                        <p class="lead fw-light text-50 mb-4">Cerca tra gli annunci!</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container mt-5 py-5">
        
        <div class="row">
            
            <div class="col-12 col-md-3 d-flex justify-content-center mb-5">
                
                <div class="accordion" id="accordionExample" style="width: 300px">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-filter me-2"></i> FILTRI
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                
                                <p class="fw-bold">CERCA PER CATEGORIE</p>
                                
                                @foreach ($categories as $category)
                                <p class="border-top">
                                    <a href="{{route('byCategory',['category' => $category->id])}}" class="nav-link mt-4" wire:click.prevent="setCategory({{$category->id}})" class="category-link">{{$category->name}}</a>
                                </p>
                                @endforeach
                                
                                {{-- @foreach ( $categories as $category )
                                <li class="nav-item"><a class="nav-link my-2 fw-light" href="{{route('byCategory',['category' => $category->id])}}">{{$category->name}}</a></li>
                                
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="col-12 col-md-9 d-flex flex-wrap justify-content-center">
                
                @foreach ($articles as $article )
                
                <div class="card rounded-5 border-0 mx-3 mb-5 ps-0 bg-transparent" style="width: 12rem; height: auto;">
                    <img src="https://dummyimage.com/300x300/d4d4d4/fff" class="card-img-top img-fluid rounded-3" alt="...">
                    <div class="card-body ps-0">
                        {{-- <p class="btn btn-sm btn-outline-primary rounded-5 card-text fw-light mx-0">{{$article->category->name}}</p> --}}
                        <h5 class="card-title fw-bold h4 text-center">{{$article->title}}</h5>
                        <p class="card-text text-center">{{$article->category->name}}</p>
                        <p class="card-text text-center h5 fw-bold">€ {{$article->price}}</p>
                    </div>
                </div>
                
                @endforeach
            </div>
            
        </div>
    </div>
    
</x-main>
