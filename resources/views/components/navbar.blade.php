<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route('homepage') }}">Home</a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <svg class="svg-inline--fa fa-bars" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path></svg><!-- <i class="fas fa-bars"></i> Font Awesome fontawesome.com -->
            </button>
            <div class="navbar-collapse collapse" id="navbarResponsive" style="">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
      {{-- <div class="container ">
        <ul>
          <li>
            <a href="#" class="ourList btn btn-info btn-lg mx-2">
              <span class="glyphicon glyphicon-log-out logOut"></span> Log in
            </a>
          </li>
          <li>
            <a href="#" class="ourList btn btn-info btn-lg mx-2">
              <span class="glyphicon glyphicon-log-out logOut"></span> Register
            </a>
          </li>
          <li>
            <a href="#" class="ourList btn btn-info btn-lg mx-2">
              <span class="glyphicon glyphicon-log-out logOut"></span> Log out
            </a>
          </li>
        </ul>
      </div> --}}
      
    </ul>
  </div>
</nav>