<x-main>

    <div class="conteiner my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                
                <form class="p-2" action="{{ route('login') }}" method="POST" >
                  @csrf
                  <h1 class="h3 mb-3 fw-normal text-white">Accedi</h1>
              
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    <label for="email">Email address</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="Password" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
                <button class="btn btn-success w-100 py-2" type="submit">Sign in</button>
                  <a href="{{ route('register') }}" class="btn btn-outline-ligth text-white">Non sei registrato?Clicca qui</a>
                  
                </form>
            </div>
        </div>
   </div>


</x-main>