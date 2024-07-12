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
</div>
</x-main>
