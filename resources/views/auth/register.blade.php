
<x-main>
  <section class="vh-100% "
     style="background-color: #CBE5EE; padding: 130px 0px;">
    <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100 ">
        <div class="row d-flex justify-content-center  h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="fw-bold  mb-2  ">Benvenuto!</h2>
                <p class="fw-light">Benvenuto! Crea il tuo account e iniza a vendere</p>
                <form class="" action="{{ route('register')}}" method="POST">
                  @csrf
                  <div>
                    <div class="mb-3">
                      <label class="h5  form-label" for="name">Nome</label>
                      <div class="input-group ">
                      <input type="name" class="form-control border-end-0" placeholder="nome" name="name" id="name" required>
                      <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                    </div>
            
                    @error('name')
                      <span>{{ $message}}</span>
                        
                    @enderror
                    </div>
                 
                   <div>
                      <div class="mb-3">
                          <label class="h5  form-label" for="email">Email</label>
                        <div class="input-group ">
                          <input type="email" class="form-control border-end-0" placeholder="email" name="email" id="email" required>
                          <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-envelope-at"></i></span>
                        </div>
                      </div>
                    
                      @error('email')
                      <span>{{ $message}}</span>
                        
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label class="h5  form-label" for="password">Password</label>
                      <div class="input-group ">
                         <input type="password" class="form-control border-end-0" placeholder="password" name="password" id="password" >
                        <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-lock"></i></span>
                      </div>
                    </div>
                  
                  </div>
                  
                  <div class="mb-3">
                    <label class="h5  form-label" for="password">Conferma Password</label>
                    <div class="input-group ">
                     <input type="password" class="form-control border-end-0" placeholder="password" name="password_confirmation" id="password" >
                     <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-lock"></i></span>
                    </div>
                  </div>
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-dark " type="submit">Registrati</button>
                    
                  </div>
      
                
  
                  <p class="text-center text-muted mt-3 mb-0">Hai gia un account?  <a href="{{ route('login')}}"
                      class="fw-bold text-body"><u>Login here</u></a></p>
                      
                </form>
                     
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-main>