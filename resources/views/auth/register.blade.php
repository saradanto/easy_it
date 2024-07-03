

<x-main>

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100 ">
      <div class="row d-flex justify-content-center mt-2 h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-2">Crea il tuo account</h2>

              <form class="" action="{{ route('register')}}" method="POST">
                @csrf

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control form-control-lg" />
                  <label class="form-label" for="name">Nome</label>
                  @error('name')
                    <span>{{ $message}}</span>
                      
                  @enderror
                </div>
                <div data-mdb-input-init class="form-outline mb-2">
                    <input type="email" id="email" value="{{old('email')}}" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="name">Email</label>
                    @error('email')
                      <span>{{ $message}}</span>
                        
                    @enderror
                  </div>

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Password</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" />
                  <label class="form-label" for="password_confirmation">Conferma la tua password</label>
                </div>

                {{-- <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> --}}

                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Registrati</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Hai gia un account?  <a href="{{ route('login')}}"
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