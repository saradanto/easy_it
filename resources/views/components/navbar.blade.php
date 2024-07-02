<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('notice') }}">Annunci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contatti</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        
        <div class="block-header block-account turan-dropdown open">
          <a class="woo-user-link" href="https://turan.kutethemes.net/my-account/" data-turan="turan-dropdown">
            <span class="icon"><i class="turanicon-user"></i></span>
            <span class="text">Login/Register</span>
          </a>
          <div class="header-account turan-submenu sub-menu">
            <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
            <div class="u-columns col2-set" id="customer_login">
              <div class="u-column1 col-1">
                <h2>Login</h2>
                <form class="woocommerce-form woocommerce-form-login login" method="post">
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="">			
                  </p>
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                    <span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"><span class="show-password-input"></span></span>
                  </p>
                  <p class="form-row">
                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                      <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                    </label>
                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="7315485e96"><input type="hidden" name="_wp_http_referer" value="/home-21/">				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                  </p>
                  <p class="woocommerce-LostPassword lost_password">
                    <a href="https://turan.kutethemes.net/my-account/lost-password/">Lost your password?</a>
                  </p>
                </form>
              </div>
              <div class="u-column2 col-2">
                <h2>Register</h2>
                <form method="post" class="woocommerce-form woocommerce-form-register register">
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">			
                  </p>
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="reg_password">Password&nbsp;<span class="required">*</span></label>
                    <span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password"><span class="show-password-input"></span></span>
                  </p>
                  <div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="https://turan.kutethemes.net/?page_id=3" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                  </div>
                  <p class="woocommerce-form-row form-row">
                    <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="7a52c78a5f"><input type="hidden" name="_wp_http_referer" value="/home-21/">				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Register">Register</button>
                  </p>
                </form>
              </div>
            </div>
          </div>            
        </div>
      </div>
      
      <li>
        <a href="#" class="btn btn-info btn-lg mx-2">
          <span class="glyphicon glyphicon-log-out logOut"></span> Log out
        </a>
      </li>
    </ul>
  </div>
</div>
</nav>