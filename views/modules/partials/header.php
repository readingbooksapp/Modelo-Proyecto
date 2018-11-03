<!-- Header section-->
<header id='header-v1' class='navbar-wrapper inner-navbar-wrapper'>
      <div class='container'>
        <div class='row'>
          <nav clas='navbar navbar-default'>
            <div class='row'>
            <!-- Inicio Left section-->
              <div class='col-md-3'>
                <div class='navbar-header'>
                  <div class='navbar-brand'>
                    <h1>
                      <a href="inicio">
                        <img src="views/images/libraria-logo-v1.png" alt="">
                      </a>
                    </h1>
                  </div>
                </div>
              </div>
              <!-- Fin Left section-->

              <!-- Inicio Rigth section-->
              <div class='col-md-9'>
                <div class='header-topbar hidden-sm hidden-xs'>
                  <div class='row'>
                    <div class='col-sm-6'>
                      <div class="topbar-info">
                        <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                          <span>/</span>
                        <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                      </div>
                    </div>
                    <div class='col-sm-6'>
                    <div class="topbar-links">
                      <a href="signin.html"><i class="fa fa-lock"></i>Iniciar sesión / Registrarse</a>
                        <span>|</span>
                      <div class="header-cart dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-shopping-cart"></i>
                          <small>0</small>
                      </a>
                      <div class="dropdown-menu cart-dropdown">
                      <ul>
                        <li class="clearfix">
                          <img src="views/images/header-cart-image-01.jpg" alt="cart item">
                          <div class="item-info">
                            <div class="name">
                              <a href="#">The Great Gatsby</a>
                            </div>
                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                            <div class="price">1 X $10.00</div>
                          </div>
                          <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                         </li>
                          <li class="clearfix">
                            <img src="views/images/header-cart-image-02.jpg" alt="cart item">
                            <div class="item-info">
                            <div class="name">
                              <a href="#">The Great Gatsby</a>
                            </div>
                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                              <div class="price">1 X $10.00</div>
                            </div>
                            <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                          </li>

                        </ul>
                      <div class="cart-total">
                        <div class="title">SubTotal</div>
                          <div class="price">$30.00</div>
                        </div>
                        <div class="cart-buttons">
                          <a href="cart.html" class="btn btn-dark-gray">View Cart</a>
                          <a href="checkout.html" class="btn btn-primary">Checkout</a>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='navbar-collapse hidden-sm hidden-xs'>
                  <ul class='nav navbar-nav'>
                    <li class='dropdown active'>
                      <a data-toggle='dropdown' href="#" class='dropdown-toggle disabled'>Inicio</a>
                    </li>
                    <li class='dropdown'>
                      <a data-toggle='dropdown' href="#" class='dropdown-toggle disabled'>Books & media</a>
                    </li>
                    <li class='dropdown'>
                      <a data-toggle='dropdown' href="#" class='dropdown-toggle disabled'>Blog</a>
                    </li>
                    <li class='dropdown'>
                      <a data-toggle='dropdown' href="#" class='dropdown-toggle disabled'>Servicios</a>
                    </li>
                    <li>
                      <a data-toggle='dropdown' href="#" class='dropdown-toggle disabled'>Contactenos</a>
                    </li>
                    <li class='search-box'>
                      <div>
                        <input type="text" name='searchTerm'>
                        <button id='searchButton' class='searchButton' type='submit'>
                          <span>Buscar</span>
                        </button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Fin Rigth section-->
            </div>
            <div class='mobile-menu hidden-lg'></div>
          </nav>
        </div>
      </div>
    </header>
  <!-- Login and register section-->
  <div class='session-section'>
    <div class='container'>
      <div class='login'>
        <div class='form'>
          <form action="" method="post">
            <div class='title'>
              <h1>Iniciar Session</h1>
            </div>
            <div class='form-group'>
              <label for="username"></label>
              <input type="text" id='username' name='username' placeholder='Ingrese email oh usuario'>
              <div class='error-login'></div>
            </div>
            <div class='form-group'>
              <label for="password"></label>
              <input type="text" id='password' name='password' placeholder='Ingrese password'>
              <div class='error-login'></div>
            </div>
            <div class='two-buttons'>
              <input type="submit" value='Ingresar' id='ingresar'>
            </div>
          </form>
        </div>
      </div>
      <div class='register'>
        <div class='form'>
          <form action="">
            <div class='title'>
              <h1>Registrarse</h1>
            </div>
            <div class='form-group'>
              <label for="userregister"></label>
              <input type="text" id='userregister' name='userregister' placeholder='Ingrese email oh usuario'>
              <div class='error-login'></div>
            </div>
            <div class='form-group'>
              <label for="email"></label>
              <input type="email" id='email' name='email' placeholder='Ingrese email oh usuario'>
              <div class='error-login'></div>
            </div>
            <div class='form-group'>
              <div class='left'>
                <label for="passwordregister"></label>
                <input type="password" id='passwordregister' name='passwordregister' placeholder='Ingrese email oh usuario'>
                <div class='error-login'></div>
              </div>
              <div class='rigth'>
                <label for="confirmPassword"></label>
                <input type="password" id='confirmPassword' name='confirmPassword' placeholder='Ingrese email oh usuario'>
                <div class='error-login'></div>
              </div> 
            </div>
            <div class='two-buttons0'>
              <button type='submit' id='guardar' name='guardar'>Guadar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End and register section-->