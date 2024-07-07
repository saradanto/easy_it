<x-main>
  <section class="vh-100% "
  style="background-color: #CBE5EE; padding: 130px 0px;">
  <div class="mask d-flex align-items-center h-100 ">
    <div class="container h-100 ">
      <div class="row d-flex justify-content-center mt-2 h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
               <h2 class="fw-bold  mb-2  ">Bentornato!</h2>
               <p class="fw-light">Bentornato! Inserisci le tue credenziali</p>


                <form action="{{ route('login')}}" method="POST">
                   @csrf

                 
                  <div class="mb-3">

                    <label class="h5  form-label" for="email">Email</label>
                    <div class="input-group ">
                      <input type="email" class="form-control border-end-0" placeholder="email" name="email" id="email" required>
                      <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                    </div>
                  </div>


                  <div class="mb-3">
                    <label class="h5  form-label" for="password">Password</label>
                    <div class="input-group ">
                     <input type="password" class="form-control border-end-0" placeholder="password" name="password" id="passwordField" required>
                     <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-eye-slash" id="togglePassword"></i></span>
                    </div>

                  </div>




                 
                  


                 <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary me-md-4 rounded-4" type="submit">Login</button>
                  <a href="{{ route('register') }}" class="btn  text-dark">Non sei registrato?Clicca qui</a>
                </form>

                  <p class="text-center text-muted mt-3 mb-0">Non sei registrato?  <a href="{{ route('register')}}"
                    class="fw-bold text-body"><u>Clicca qui</u></a></p>
                    <p class="text-center">
                      o esegui l'accesso con
                    </p>
                    <div class="text-center">
                      <button class="btn btn-outline-danger rounded-3 me-md-4">google</button>
                    </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


</x-main>
<i class="bi bi-eye-slash" id="togglePassword"></i>