<x-main>
    <section class="vh-100% "
    style="background-color: #CBE5EE; padding: 130px 0px;">
   <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100 ">
        <div class="row d-flex justify-content-center mt-2 h-100">
         <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
             <div class="card-body p-5">
                 <h2 class="fw-bold  mb-2  ">Se hai dimenticato la tua password non preoccuparti!</h2>
                 <p class="fw-light">Inserisci la tua email</p>
              

                    <form action="{{ route('password.email')}}" method="POST">
                        @csrf
                   
                        <div class="mb-3">
                            <label class="h5  form-label" for="email">Email utente</label>
                            <div class="input-group ">
                                <input type="email" class="form-control border-end-0" placeholder="email" name="email" id="email" required>
                                <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-dark" type="submit">Richiedi</button>
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
                   
                   
                     