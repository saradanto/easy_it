

<x-main>

<section class="vh-100% "
  style="background-color: #CBE5EE; padding: 130px 0px;">
  <div class="mask d-flex align-items-center h-100 ">
    <div class="container h-100 ">
      <div class="row d-flex justify-content-center  h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-2 text-info">Crea il tuo account</h2>

              <form class="" action="{{ route('register')}}" method="POST">
                @csrf

                <div data-mdb-input-init class="form-outline mb-2 ">
              
                  <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control form-control-lg border-0 rounded-0 border-bottom " placeholder="&#x1F464;nome" />
                  
                  @error('name')
                    <span>{{ $message}}</span>
                      
                  @enderror
                </div>
                <div data-mdb-input-init class="form-outline mb-2">
                  
                    
                    <input type="email" id="email" value="{{old('email')}}" name="email" class="form-control form-control-lg border-0 rounded-0 border-bottom" placeholder="&#x1F4E7;email " />
                    
                    @error('email')
                      <span>{{ $message}}</span>
                        
                    @enderror
                  </div>

                <div data-mdb-input-init class="form-outline mb-2 ">
                  
                  <input type=" password " id="password" name="password" class="form-control form-control-lg border-0 rounded-0 border-bottom" placeholder="&#x1F512;password " >

                  
                </div>

                <div data-mdb-input-init class="form-outline mb-2">
                  
                    <input type="password" id="password" name="password_confirmation" class="form-control form-control-lg border-0 rounded-0 border-bottom"  placeholder="&#x1F512;conferma password " />
                  
               
                  
                </div>

            

                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-outline-info me-md-4 rounded-4">Registrati</button>
                </div>

                <p class="text-center text-muted mt-3 mb-0">Hai gia un account?  <a href="{{ route('login')}}"
                    class="fw-bold text-body"><u>Login here</u></a></p>
                    {{-- <p class="text-center">
                      o esegui l'accesso con
                    </p>
                    <div class="text-center">
                      <button class="btn btn-outline-info rounded-4 me-md-4">google</button>
                    </div> --}}

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<input type="password" id="passwordField" placeholder="Inserisci la tua password">
<i class="bi bi-eye-slash" id="togglePassword"></i>



</x-main>