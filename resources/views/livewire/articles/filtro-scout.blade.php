<div class="container">
    <div class="row">
        <div class="col-12">

            <input wire:model.live="query" type="search">

            @if($articles)
                @forelse($articles as $article)
                    <div class=" mt-2  bg-white border rounded shadow-sm">
                        <div class="p-2 border-bottom">
                            <a href="{{ route('article.show', ['article' => $article]) }}" class="text-decoration-none text-dark">
                                <h5 class="mb-1">{{ $article->title }}</h5>
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class=" mt-2  bg-white border rounded shadow-sm">
                        <div class="p-2 border-bottom">

                            <h5 class="mb-1">Nessun risultato trovato</h5>
                            </a>
                        </div>
                    </div>

                @endforelse
            @endif
        </div>
    </div>
</div>
