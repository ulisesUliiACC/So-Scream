@extends('layouts/blankLayout')

@section('title', 'Blank layout - Layouts')

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
	<title>IMBA | Tu Compra</title>

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
								<li><a href="{{url('/')}}">Inicio</a></li>
								<li><a href="{{route('about')}}">Nosotros</a></li>
								<li><a href="news.html">Blog</a>
								<li><a href="contact.html">Contacto</a></li>
								<ul class="sub-menu">
									<li><a href="news.html">News</a></li>
									<li><a href="single-news.html">Single News</a></li>
								</ul>
								</li>

								<li><a href="{{route('shop.shop')}}">Shop</a>

								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i
												class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i
												class="fas fa-search"></i></a>

                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                        <a  href="{{route('logout')}}" onclick="event.preventDefault();
                        this.closest('form').submit();"><i
                          ></i>salir</a>
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
					<span class="close-btn"><i class="fas fa-window-close">xd</i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Buscador:</h3>
							<input type="text" placeholder="Texto">
							<button type="submit">Buscar<i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->



	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Haz de la cremosidad tu felicidad</p>
						<h1>Tu compra</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Imagen</th>
									<th class="product-name">Nombre</th>
									<th class="product-price">Precio</th>
									<th class="product-quantity">Cantidad</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
                @foreach (Cart::content() as $productos)
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="{{ asset($productos->options->imagen) }}" alt="">
									</td>
									<td class="product-name">{{ $productos->name }}</td>
									<td class="product-price">{{ $productos->price }}</td>
									<td class="product-quantity">
                    <div class="input-group-prepend">
                      <a href="{{ route('qty-decrement', $productos->rowId) }}"
                          class="btn btn-outline-black decrease" type="button">&minus;
                      </a>
                  </div>
                  <input type="text" class="form-control text-center quantity-amount"
                      value="{{ $productos->qty }}" placeholder=""
                      aria-label="Example text with button addon" aria-describedby="button-addon1">

                  <div class="input-group-append">
                      <a href="{{ route('qty-increment', $productos->rowId) }}"
                          class="btn btn-outline-black increase" type="button">&plus;
                      </a>
                  </div>
                  </td>
									<td class="product-total">1</td>
								</tr>
                @endforeach
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Precio</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>$500</td>
								</tr>
								<tr class="total-data">
									<td><strong>Envio: </strong></td>
									<td>$45</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>${{ Cart::priceTotal() }}</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="cart.html" class="boxed-btn">Actualizar compra</a>
							<a href="{{route('checkout')}}" class="boxed-btn black">Comprar </a>
						</div>
					</div>

					<!-- <div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	<!-- logo carousel -->
	<!-- <div class="logo-carousel-section">
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
	</div> -->
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">IMBA</h2>
						<p>Industria Mexicana de Biotecnología Alimentaria. <br> Lideres de productos innovadores y saludables
							en el campo de la biotecnología alimentaria.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Ubicanos</h2>
						<ul>
							<li>Paraje Lomas de San Juan s/n, de, Méx.</li>
							<li>IMBA@support.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Directorio</h2>
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="about.html">Nosotros</a></li>
							<li><a href="news.html">Blog</a></li>
							<li><a href="contact.html">Contacto</a></li>
							<li><a href="services.html">Shop</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribete</h2>
						<p>Suscríbase a nuestra lista de correo para recibir las últimas actualizaciones.</p>
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
					<p>Copyrights &copy; 2023 - <a href="">Code Strokes</a>,  All Rights Reserved.<br>
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

@endsection



<script>
  $(document).ready(function() {
      var quantityInput = $('#quantity-input');

      // Manejar cambios en el valor del campo de entrada
      quantityInput.on('input', function() {
          var newQuantity = parseInt(quantityInput.val());

          if (!isNaN(newQuantity) && newQuantity >= 1) {
              // Realizar una solicitud AJAX para actualizar la cantidad en el carrito
              updateCartQuantity(newQuantity);
          }
      });

      function updateCartQuantity(newQuantity) {
          // Realiza una solicitud AJAX para actualizar la cantidad en el carrito
          // Asegúrate de obtener el productId apropiado
          var productId = 'obtener_de_algun_lugar';

          $.ajax({
              type: 'GET',
              url: '/update-cart-quantity/' + productId, // Ajusta la ruta según tus rutas definidas
              data: {
                  quantity: newQuantity
              },
              success: function(response) {
                  // Maneja la respuesta del servidor, si es necesario
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
      }
  });
</script>
