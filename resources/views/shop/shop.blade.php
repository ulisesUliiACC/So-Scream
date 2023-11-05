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
        <title>Shop</title>

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
                                    <img src="assets/img/logo.png" alt="">
                                </a>
                            </div>
                            <!-- logo -->

                            <!-- menu start -->
                            <nav class="main-menu">
                                <ul>
                                    <li class="current-list-item"><a href="{{url('/')}}">Home</a> </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li><a href="news.html">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="single-news.html">Single News</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="{{ route('shop.shop') }}">Shop</a>
                                    </li>
                                    <li>
                                        <div class="header-icons">
                                            <a class="shopping-cart" href="{{route('cart.carrito')}}"><i class="fas fa-shopping-cart"></i></a>
                                            <a class="user-icon" id="user-icon"><i class='fas fa-user'></i></a>
              <!-- Opciones de usuario -->
              <div class="user-options" id="user-options">
                  <ul>

                      <li><a href="{{route('login')}}">Iniciar Seccion</a></li>

                      <li><a href="#">Perfil</a></li>
                      <li><a href="#">Configuración</a></li>

                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                      <li><a  href="{{route('logout')}}" onclick="event.preventDefault();
                        this.closest('form').submit();">Cerrar sesión</a></li>
                      </form>

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

        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search arewa -->

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Productos de alta Calidad</p>
                            <h1>Suplemento de Soya</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- products -->
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row product-lists">
                  @foreach ($productos as $producto)
                    <div class="col-lg-4 col-md-6 text-center berry">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="{{ asset($producto->imagen) }}" alt="error de carga"></a>
                            </div>
                            <h3>{{ $producto->nombre_producto }}</h3>
                            <p class="product-price"><span>Per Kg</span> {{ $producto->precio }} </p>
                            <a href="#" class="cart-btn agregar-al-carrito" data-product-id="{{ $producto->id }}">
                              <i class="fas fa-shopping-cart"></i> Add to Cart
                          </a>


                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end products -->

        <!-- logo carousel -->
        <div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-carousel-inner">
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/1.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/2.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/3.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/4.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end logo carousel -->

        <!-- footer -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">About us</h2>
                            <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box get-in-touch">
                            <h2 class="widget-title">Get in Touch</h2>
                            <ul>
                                <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                                <li>support@fruitkha.com</li>
                                <li>+00 111 222 3333</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box pages">
                            <h2 class="widget-title">Pages</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Shop</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box subscribe">
                            <h2 class="widget-title">Subscribe</h2>
                            <p>Subscribe to our mailing list to get the latest updates.</p>
                            <form action="index.html">
                                <input type="email" placeholder="Email">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->

        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
                            Reserved.<br>
                            Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-right col-md-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end copyright -->

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    $('.agregar-al-carrito').click(function(event) {
        event.preventDefault();

        var productId = $(this).data('product-id');

        // Comprobar si el usuario está autenticado
        var isUserLoggedIn = {{ Auth::check() ? 'true' : 'false' }};

        if (isUserLoggedIn) {
            $.ajax({
                type: 'POST',
                url: '/add-to-cart/' + productId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Producto agregado al carrito con éxito',
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Hubo un error al agregar el producto al carrito.'
                    });
                }
            });
        } else {
            // Mostrar alerta
            Swal.fire({
                icon: 'info',
                title: 'Debes iniciar sesión para agregar este producto.',
                showConfirmButton: false,
                timer: 3000 // Tiempo en milisegundos (3 segundos en este ejemplo)
            });

            // Redirigir al usuario a la página de inicio de sesión después del tiempo especificado
            setTimeout(function() {
                window.location.href = '/login';  // Cambia '/login' a la URL de tu página de inicio de sesión
            }, 3000); // Cambia el valor a la duración deseada en milisegundos (3 segundos en este ejemplo)
        }
    });
});

</script>

