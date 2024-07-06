<x-main>
  <section class="vh-100% "
  style="background-color: #CBE5EE; padding: 130px 0px;">
  <div class="mask d-flex align-items-center h-100 ">
    <div class="container h-100 ">
      <div class="row d-flex justify-content-center mt-2 h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
               <h2 class="text-uppercase text-center mb-2 text-info ">Login</h2>


                <form action="{{ route('login')}}" method="POST">
                   @csrf

                  <div data-mdb-input-init class="form-outline    mb-4">
                    {{-- <label for="email">Inserisci la tua email</label> --}}
                    <input  type="email" class="form-control border-0 rounded-0 border-bottom" id="email" name="email" placeholder=" &#x1F464;name@example.com" required>
                  </div>



                 <div data-mdb-input-init class="form-outline mb-4">
                    <label for="password">Password</label>
                   <input type="password" class="form-control" name="password" id="Password" placeholder="Password" required>
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
                      <button class="btn btn-outline-danger rounded-4 me-md-4">google</button>
                    </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


</x-main>
