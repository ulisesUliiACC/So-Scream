@extends('layouts/blankLayout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"
            content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

        <!-- title -->
        <title>IMBA | Blog</title>

        <!-- favicon -->
        <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <!-- fontawesome -->
        <link rel="stylesheet" href="assetss/css/all.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="assetss/css/owl.carousel.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="assetss/css/magnific-popup.css">
        <!-- animate css -->
        <link rel="stylesheet" href="assetss/css/animate.css">
        <!-- mean menu css -->
        <link rel="stylesheet" href="assetss/css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="assetss/css/main.css">
        <!-- responsive -->
        <link rel="stylesheet" href="assetss/css/responsive.css">

    </head>

    <body>

        <!--PreLoader-->
        <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>
        <!--PreLoader Ends-->

       <!-- header -->
    <div class="top-header-area" id="sticker">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-sm-12 text-center">
                  <div class="main-menu-wrap">
                      <!-- logo -->
                      <div class="site-logo">
                          <a href="index.html">
                              <img src="assetss/img/logo.png" alt="">
                          </a>
                      </div>
                      <!-- logo -->

                      <!-- menu start -->
                      <nav class="main-menu">
                          <ul>
                              <li><a href="{{ url('/') }}">Inicio</a></li>
                              <li><a href="{{ route('about') }}">Nosotros</a></li>
                              <li><a href="news.html">Blog</a></li>
                              <li><a href="contact.html">Contacto</a></li>
                              <li><a href="{{ route('shop.shop') }}">Shop</a></li>
                              <li>
                                  <div class="header-icons">
                                      <a class="shopping-cart" href="{{ route('cart.carrito') }}"><i
                                              class="fas fa-shopping-cart"></i></a>
                                      <a class="user-icon" id="user-icon"><i class='fas fa-user'></i></a>
                                      <!-- Opciones de usuario -->
                                      <div class="user-options" id="user-options">
                                          <ul>

                                              <li><a href="{{ route('login') }}">Iniciar Seccion</a></li>
                                              <li><a href="{{ route('profile.edit') }}">Perfil</a></li>
                                              <li><a href="{{ route('profile.edit') }}">compras</a></li>
                                              <li><a href="#">salir</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </nav>
                      <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                      <div class="mobile-menu"></div>
                      <!-- menu end -->

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- end header -->



        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Información de perfil</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- latest news -->
        <div class="latest-news mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html"></a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">información del perfil</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> User {{ Auth::user()->name }}</span>

                                </p>
                                <p>
                                <p class="excerpt">Actualice la información del perfil y la dirección de correo electrónico
                                    de su cuenta.</p>

                                </p>
                                <div class="billing-address-form">
                                    <form action="index.html">
                                        <p><i class="fas fa-user">
                                                <label for="nombre">Nombre:</label>
                                                <input type="text" id="nombre" placeholder="Nombre" required>
                                                <span class="error" id="nombre-error"></span>
                                            </i></p>
                                        <p>
                                            <label for="correo">Correo:</label>
                                            <input type="email" id="correo" placeholder="Correo" required>
                                            <span class="error" id="correo-error"></span>
                                        </p>

                                        <p><input type="submit" value="Guardar"></p>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html"></a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">Actualiza contraseña</a></h3>

                                <p class="excerpt">Asegúrese de que su cuenta utilice una contraseña larga y aleatoria para
                                    mantenerse segura.</p>
                                <div class="billing-address-form">
                                    <form action="index.html">
                                        <p>
                                            <label for="nombre">Contraseña actual</label>
                                            <input type="password" id="nombre"required>
                                            <span class="error" id="nombre-error"></span>
                                        </p>
                                        <form action="index.html">
                                            <p>
                                                <label for="nombre">Nueva contraseña</label>
                                                <input type="password" id="nombre" required>
                                            </p>
                                            <form action="index.html">
                                                <p>
                                                    <label for="nombre">confirmar Contraseña</label>
                                                    <input type="password" id="nombre"required>
                                                    <span class="error" id="nombre-error"></span>
                                                </p>

                                                <p><input type="submit" value="actualizar"></p>

                                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html"></a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">Borrar cuenta</a></h3>

                                <p class="excerpt">Una vez que se elimine su cuenta, todos sus recursos y datos se
                                    eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o
                                    información que desee conservar.</p>
                                <button type="button" class="btn btn-danger">Eliminar</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <!-- jquery -->
        <script src="assetss/js/jquery-1.11.3.min.js"></script>
        <!-- bootstrap -->
        <script src="assetss/bootstrap/js/bootstrap.min.js"></script>
        <!-- count down -->
        <script src="assetss/js/jquery.countdown.js"></script>
        <!-- isotope -->
        <script src="assetss/js/jquery.isotope-3.0.6.min.js"></script>
        <!-- waypoints -->
        <script src="assetss/js/waypoints.js"></script>
        <!-- owl carousel -->
        <script src="assetss/js/owl.carousel.min.js"></script>
        <!-- magnific popup -->
        <script src="assetss/js/jquery.magnific-popup.min.js"></script>
        <!-- mean menu -->
        <script src="assetss/js/jquery.meanmenu.min.js"></script>
        <!-- sticker js -->
        <script src="assetss/js/sticker.js"></script>
        <!-- main js -->
        <script src="assetss/js/main.js"></script>

    </body>

    </html>
    <script>
      document.getElementById('user-icon').addEventListener('click', function() {
        var userOptions = document.getElementById('user-options');
        if (userOptions.style.display === 'none' || userOptions.style.display === '') {
            userOptions.style.display = 'block';
        } else {
            userOptions.style.display = 'none';
        }
    });

    // Cerrar las opciones de usuario si se hace clic fuera de ellas
    document.addEventListener('click', function(event) {
        var userOptions = document.getElementById('user-options');
        var userIcon = document.getElementById('user-icon');

        if (event.target !== userIcon && event.target !== userOptions) {
            userOptions.style.display = 'none';
        }
    });

    </script>
@endsection

