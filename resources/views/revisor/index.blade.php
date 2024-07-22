<x-main>
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-3">
                <div class="rounded shadow bg-body-tertiary">
                    <h3 class="h3 text-center pb-2">
                    Revisor dashbord

                    </h3>

                </div>
            </div> --}}

            <header class="" style="background-color: #CBE5EE; padding: 100px 0px;">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder mb-2">Revisor dashboard</h1>
        
                            </div>
                        </div>
                    </div>
                </header>
        </div>

        @if(session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-success text-center shadow rounded">
                    {{session('message')}}
                </div>
            </div>
        @endif


<div class="container">
    @livewire('articles.review2')


    @foreach ($article_to_check ->images as $key => $image)

        <div class="col-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $image->getUrl(300, 300) }}"
                        class="img-fluid rounded-start" alt="immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}' ">
                    </div>
                    <div class="col-md-5 ps-3">
                        <div class="card-body">
                            <h5>labels</h5>
                            @if ($image->labels)
                                @foreach ($image->labels as $label)
                                    #{{ $label }}, 
                                @endforeach
                            @else
                                <p class="fst-italic">no labels</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-body">
                            <h5 class="">Rating</h5>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{ $image->adult }}">
                                    </div>
                                </div>
                                <div class="col-10">adult</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{ $image->violence }}">
                                    </div>
                                </div>
                                <div class="col-10">violence</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{ $image->spoof }}">
                                    </div>
                                </div>
                                <div class="col-10">spoof</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{ $image->racy }}">
                                    </div>
                                </div>
                                <div class="col-10">racy</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{ $image->medical }}">
                                    </div>
                                </div>
                                <div class="col-10">medical</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach


</div>
</x-main>
