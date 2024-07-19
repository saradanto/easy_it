
<div class="container mt-3">

    <div class="row">
        <div class="col-12 col-md-3 ">

            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button h3 fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            {{__('category.search')}}
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form class="d-flex" >
                                <input wire:model.live="search" class="form-control me-2" name="search"
                                type="search" placeholder="{{__('category.search')}}"
                                aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header border-bottom-0">
                        <button class="accordion-button h3 fw-bolder border-bottom-0" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            {{__('category.category')}}
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>
                                <a href="#" wire:click.prevent="clearFilters" class="category-link nav-link">{{__('category.allArticle')}}</a>
                            </p>
                            @foreach ($categories as $category)
                            <p class="border-top">
                                <a href="" class="nav-link mt-4" wire:click.prevent="setCategory({{$category->id}})" class="category-link">{{__("category.$category->name")}}</a>
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="col-12 col-md-9 d-flex flex-wrap justify-content-center">

            @foreach ($articles as $article )

            <div class="card mx-3 my-3 rounded-3 bg-body-tertiary" style="width: 17rem; min-height: 28rem">
                {{-- <img src="https://dummyimage.com/300x300/d4d4d4/fff" class="card-img-top img-fluid rounded-top-3" alt="..."> --}}
                <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://dummyimage.com/300x300/d4d4d4/fff' }}" alt="Immagine dell'articolo {{$article->title}}" class="card-img-top img-fluid rounded-top-3">
                <div class="card-body py-4">
                  <h5 class="card-title fw-bold h3">{{$article->title}}</h5>
                  <p class="card-text">{{$article->category->name}}</p>
                  <div class="d-flex justify-content-between">
                    <p class="card-text h4 fw-bold">€ {{$article->price}}</p>
                    <p class="rounded-3"><a class="btn btn-primary" href="{{route('article.show', ['article' => $article])}}">{{__('category.show')}}</a></p>
                  </div>
                </div>
              </div>

            @endforeach
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">{{ $articles->links()}}</div>
            </div>
        </div>

    </div>
</div>

