<x-main>

    <div>

        <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder mb-2">Contattaci</h1>
                            <p class="lead fw-light text-50 mb-4">Inserisci i dati e invia la tua richiesta</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="container my-5 py-5 d-flex justify-content-center">
            <div class="col-12 border-2 bg-white p-5 rounded-4" style="width: 1000px"> 
                <a class="nav-link text-primary rounded-5 mb-5" href="{{route('homepage')}}"><i class="bi bi-arrow-left-short me-2"></i>Torna indietro</a>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                            
                        @endforeach
                    </ul>

                </div>
                
            @endif
            
            
            
            <form action="{{ route('send')}}" method="POST">
                @csrf
                <h3 class="h3   mt-5 pt-3">Lascia il tuo feedback</h3>
                <p class="mb-4 fw-light">Compila il form e facci sapere la tua opinione provvederemo a ricontattarti</p>
        
                <div class="row">
                
                        {{-- input titolo --}}
                        <div class="form-floating mb-4 col">
                            <input class="form-control border-2" name="name" type="text" id="name" >
                            <label class="ms-2" for="name">Nome</label>
                           
                        </div>
        
                        {{-- input prezzo --}}
                        <div class="form-floating mb-4 col">
                            <input class="form-control border-2" name="email" id="email"></input>
                            <label class="ms-2" for="email">Email</label>
                           
                        </div>
        
                </div>
        
                {{-- input descrizione --}}
                <div class="form-floating mb-5">
                    <textarea class="form-control border-2" name="description" style="height: 180px" rows="5"></textarea>
                    <label for="description" id="description">Inserisci una descrizione...</label>
                    
                </div>
               
               
                    
           
        
            
        
               
                  
        
                <div class="d-grid d-flex justify-content-center">
                    <button class="btn btn-dark rounded-3 mb-5 px-5 py-2" type="submit">Invia</button>
                </div>
        
            </form>
        </div>
        </div>
        </div>

</x-main>