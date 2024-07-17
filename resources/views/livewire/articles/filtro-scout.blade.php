<div class="container">
    <div class="row">
        <div class="col-12">


              <div class="container d-flex justify-content-center align-items-center flex-column mt-5 bg-white p-5 rounded-3 shadow">
                <h2 class="h2 fw-bold text-center mb-4">Cerca</h2>
                <form class="d-flex w-50 input-group flex-nowrap border-2">
                  <span class="input-group-text border-end-0 bg-transparent" id="addon-wrapping"><i class="bi bi-search"></i></span>
                  <input wire:model.live="query" class="form-control me-2 border-start-0 rounded-end-3" name="search" type="search" placeholder="Cerca..." aria-label="Search" aria-describedby="addon-wrapping">
                  <a class="btn btn-dark btn-lg px-4 rounded-3" href="{{route('notice')}}">Cerca</a>
                </form>

                    <div class="w-75">
                        @if($articles)
                            @forelse($articles as $article)
                                <div class=" mt-2 bg-white border rounded shadow-sm">
                                    <div class="p-2 border-bottom d-flex justify-content-between">
                                        <a href="{{ route('article.show', ['article' => $article]) }}" class="text-decoration-none text-dark">
                                            <p class="my-3 h6">{{ $article->title }}</p>
                                        </a>
                                        <span class="my-3 h6 text-muted">{{$article->category->name}}</span>
                                    </div>
                                </div>
                                @empty
                                <div class="mt-2 bg-white border rounded shadow-sm">
                                    <div class="p-2 border-bottom">
                                        <div class="text-center mt-2 pt-2">
                                            <i class="bi bi-exclamation-triangle display-5 mb-2"></i>
                                            <p class="fw-normal h3">Nessun annuncio trovato</p>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        @endif
                    </div>
              </div>




        </div>
    </div>
</div>
