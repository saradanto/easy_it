<x-main>
    <h1>notice</h1>

    <div class="container mt-5 py-5">
        <div class="row">
            <div class="col-4">
                <div class="accordion" id="accordionExample" style="width: 300px">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            LISTA CATEGORIE
                        </button>
                      </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @foreach ( $categories as $category )
                                    <li><a href="{{route('byCategory',['category' => $category->id])}}">{{$category->name}}</a></li>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">

                    @foreach ($articles as $article )

                        <div class="card rounded-5 border-0 mx-3" style="width: 18rem; height: auto;">
                            <img src="https://picsum.photos/200/200?random=1" class="card-img-top img-fluid rounded-4" alt="...">
                            <div class="card-body">
                            <p class="card-text fw-bold">Categoria: {{$article->category->name}}</p>
                            <h5 class="card-title fw-bold">Titolo: {{$article->title}}</h5>
                            <p class="card-text">Price: {{$article->price}}</p>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-main>
