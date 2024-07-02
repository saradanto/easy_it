

<x-main>
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-3">
              <h2 class="text-uppercase text-center mb-3">Crea il tuo account</h2>

              <form action="{{ route('register') }}" method="POST">
                  @csrf
                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control form-control-lg" />
                  <label class="form-label" >Nome</label>
                </div>
                @error('name')
                    <span>{{$message}}</span>
                @enderror

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control form-control-lg" />
                  <label for="email" class="form-label" > Email</label>
                </div>
                @error('email')
                <span>{{$message}}</span>
               @enderror

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="password" name="password" id="password" class="form-control form-control-lg" />
                  <label class="form-label" >Password</label>
                </div>
                @error('password')
                <span>{{$message}}</span>
               @enderror

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" />
                  <label class="form-label" >Conferma la tua password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Registrati</button>
                </div>

                <p class="text-center text-muted mt-2 mb-0">Sei gia registrato? Entra subito <a href="{{route('login')}}"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>

</x-main>