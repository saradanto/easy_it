
<x-main>
  <section class="vh-100% "
     style="background-color: #CBE5EE; padding: 130px 0px;">
    <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100 ">
        <div class="row d-flex justify-content-center  h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="fw-bold  mb-2  ">{{__('authcp.rWelcome')}}</h2>
                <p class="fw-light">{{__('authcp.rWelcome2')}}</p>
                  
                <form class="" action="{{ route('register')}}" method="POST">
                  @csrf
                  
                    <div class="mb-3">
                      <label class="h5  form-label" for="name">{{__('authcp.rName')}}</label>
                      <div class="input-group ">
                        <input type="name" class="form-control border-end-0" value="{{old('name')}}" placeholder="nome" name="name" id="name" required>
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
                          <input type="email" class="form-control border-end-0 rounded-start" value="{{old('email')}}" placeholder="email" name="email" id="email" required>
                          <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-envelope-at"></i></span>
                        </div>
                      </div>
                      @error('email')
                      <span>{{ $message}}</span>
                      @enderror
                    </div>
                        
                 
                    
                     <div>
                       <div class="mb-3">
                         <label class="h5  form-label" for="password">Password</label>
                         <div class="input-group ">
                            <input type="password" class="form-control border-end-0 rounded-start" placeholder="password" name="password" id="password" >
                           <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-lock"></i></span>
                         </div>
                       </div>
                       @error('password')
                       <span>{{ $message}}</span>
                       @enderror
                       
                      </div>   
                      
                      <div class="mb-3">
                        <label class="h5  form-label" for="password">{{__('authcp.rConfirm')}}</label>
                        <div class="input-group ">
                         <input type="password" class="form-control border-end-0" placeholder="password" name="password_confirmation" id="password" >
                         <span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="bi bi-lock"></i></span>
                        </div>
                      </div>
                  
                  
                  <div class="d-grid gap-2 col-12 mx-auto mt-5">
                    <button class="btn btn-dark rounded-3" type="submit">{{__('authcp.rRecord')}}</button>
                    
                  </div>
      
                
  
                  <p class="text-center text-muted mt-3 mb-0"> {{__('authcp.rAccount')}} <a href="{{ route('login')}}"
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