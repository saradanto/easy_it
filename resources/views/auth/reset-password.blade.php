<x-main>
    <section class="vh-100% "
    style="background-color: #CBE5EE; padding: 130px 0px;">
   <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100 ">
        <div class="row d-flex justify-content-center mt-2 h-100">
         <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
             <div class="card-body p-5">
                 <h2 class="fw-bold  mb-2  ">Inserisci una nuova password</h2>
                 
              

                    <form action="{{ route('password.update')}}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token')}}">
                        <input type="hidden" name="email" value="{{ $request->email }}">

                   
                        <div class="mb-3">
                            <label class="h5  form-label" for="password">Password</label>
                            <div class="input-group ">
                                <input type="password" class="form-control border-end-0" placeholder="password" name="password" id="password" required>
                                <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-lock"></i></span>
                            </div>
                           
                            <div class="mb-3">
                              <label class="h5  form-label" for="password">Conferma Password</label>
                              <div class="input-group ">
                               <input type="password" class="form-control border-end-0" placeholder="password" name="password_confirmation" id="password" >
                               <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-lock"></i></span>
                              </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-dark" type="submit">Conferma</button>
                            </div>
                       
                        </div>
                    </form>

                </div>
        
              </div>
            </div>
          </div>
        </div>
      </div>
        
    </section>
  </x-main>
                   
                   
                     