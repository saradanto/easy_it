<x-main>

    <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Login</h3>
              <form action="{{ route('login')}}" method="POST">
                @csrf

                 <div data-mdb-input-init class="form-outline mb-4">
                  <label for="email">Inserisci la tua email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                  
                
              </div>

               <div data-mdb-input-init class="form-outline mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="Password" placeholder="Password" required>
                    
                
              </div>
               <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                <a href="{{ route('register') }}" class="btn  text-dark">Non sei registrato?Clicca qui</a>
              </form>
             
  
             
  
             
            
             
  
              
  
              <hr class="my-4">
  
            
          </div>
        </div>
      </div>
    </div>
  </section>


</x-main> 