
<div class="container mt-5 py-5">

    <div class="row">
        <div class="col-12 col-md-3 ">

            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button h3 fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Cerca
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form class="d-flex" >
                                <input wire:model.live="search" class="form-control me-2" name="search"
                                type="search" placeholder="Cerca Articolo"
                                aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header border-bottom-0">
                        <button class="accordion-button h3 fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Categorie
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>
                                <a href="#" wire:click.prevent="clearFilters" class="category-link nav-link">Tutti gli articoli</a>
                            </p>
                            @foreach ($categories as $category)
                            <p class="border-top">
                                <a href="" class="nav-link mt-4" wire:click.prevent="setCategory({{$category->id}})" class="category-link">{{$category->name}}</a>
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-9">

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

