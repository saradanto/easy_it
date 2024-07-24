<div>
    @if(session()->has('message'))
    <div class="alert alert-success mt-5">
        {{ session('message') }}
    </div>
    @endif
    
    
    
    @if($lastReviewedArticle)
    <button type="button" class="btn btn-warning " wire:click="annulla" >Annulla ultima azione</button>
    @endif
    
    
    <div class="mt-3">
        <a class="nav-link text-primary rounded-5 mb-5" href="{{route('article.index')}}"><i class="bi bi-arrow-left-short me-2"></i>Torna indietro</a>
    </div>
    
    @if ($article_to_check)
    
    <div class="container bg-body-tertiary shadow rounded-3 py-2 px-5 mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row justify-content-center pt-5">
                    <div class="col-12 ps-4 d-flex flex-column justify-content-between">
                        <div class="row justify-content-center">
                            
                            @if ($article_to_check->images->count())
                            @foreach ($article_to_check->images as $key => $image)
                            <div class="col-6 col-md-4 mb-2 text-center">
                                <img src="{{$image->getUrl(300, 300)}}" class="img-fluid rounded shadow"
                                alt="immagine {{$key+1}} dell'articolo '{{$article_to_check->title}}'"> 
                            </div>
                            @endforeach
                            @else
                            @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img src="https://picsum.photos/300"
                                class="img-fluid rounded shadow" alt="immagine segnaposto">
                                
                            </div>
                            
                            @endfor
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row justify-content-center pt-5">
                    <div class="col-md-8">
                        <h1>{{ $article_to_check->title}}</h1>
                        <h3>Autore: {{ $article_to_check->user->name}}</h3>
                        <h4>{{ $article_to_check->price}}€</h4>
                        <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                        <p class="h6">{{ $article_to_check->description }}</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <div class="d-flex pb-4 justify-content-around">
                    <button wire:click="openModal('reject')" class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                    <button wire:click="openModal('accept')" class="btn btn-success py-2 px-5 mx-3 fw-bold">Accetta</button>
                </div>
                
            </div>

            {{-- google vision AI label --}}
            @foreach ($article_to_check ->images as $key => $image)

            <div class="col-6">
                <div class="card mb-3">
                    <div class="row g-0">

                        <div class="col-md-4">
                            <img src="{{ $image->getUrl(300, 300) }}"
                            class="img-fluid rounded-start" alt="immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}' ">
                        </div>

                        <div class="col-md-4 ps-3 border-start">
                            <div class="card-body">
                                <h5>labels</h5>
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        #{{ $label }}, 
                                    @endforeach
                                @else
                                    <p class="fst-italic">No labels</p>
                                @endif
                            </div>
                        </div>
    
                        <div class="col-md-4 border-start">
                            <div class="card-body">
                                <div class="container">
                                <h5 class="">Rating</h5>
                                <div class="row mb-2 border-bottom">
                                    <div class="col-8 col-md-8">adult</div>
                                    <div class="col-2 col-md-2">
                                        <div class="text-center mx-auto {{ $image->adult }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 border-bottom">
                                    <div class="col-8">violence</div>
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->violence }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 border-bottom">
                                    <div class="col-8">spoof</div>
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->spoof }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 border-bottom">
                                    <div class="col-8">racy</div>
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->racy }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 border-bottom">
                                    <div class="col-8">medical</div>
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->medical }}">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
            @endforeach
            {{-- google vision AI label --}}
        </div>
    </div>
    
    
    
    
    <!-- Bootstrap Modal -->
    <div class="modal fade @if($showModal) show @endif" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="@if($showModal) false @else true @endif" @if($showModal) style="display: block;" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Conferma azione</h5>
                    <button type="button" class="close btn ms-auto" wire:click="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler {{ $actionType === 'accept' ? 'accettare' : 'rifiutare' }} questo articolo?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal">Annulla</button>
                    <button type="button" class="btn btn-success" wire:click="confirmAction">Conferma</button>
                </div>
                
            </div>
        </div>
    </div>
    @if($showModal)
    <div class="modal-backdrop fade show"></div>
    @endif
    @else
    <div class="row justify-content-center align-items-center height-custom text-center">
        <div class="col-12">
            <h1 class="fst-italic display-4">
                Nessun articolo da revisionare
            </h1>
            <a href="{{ route('homepage')}}" class="mt-5 btn btn-success">Torna all'Homepage</a>
        </div>
    </div>
    @endif
</div>
