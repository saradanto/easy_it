<x-main>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-3">
                <div class="rounded shadow bg-body-secondary">
                    <h1 class="display-5 text-center pb-2">
                    Revisor dashbord

                    </h1>

                </div>
            </div>

        </div>

        @if(session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-success text-center shadow rounded">
                    {{session('message')}}
                </div>
            </div>
        @endif



    @livewire('articles.review2')

</x-main>
