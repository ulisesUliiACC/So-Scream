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
	<title>IMBA | Finalizar compra</title>

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
								<li><a href="#">Pages</a>

								</li>
								<li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i
												class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i
												class="fas fa-search"></i></a>
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
						<h1>Finaliza tu compra</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
							<div class="card single-accordion">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse"
											data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Billing Address
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
									data-parent="#accordionExample">
									<div class="card-body">
										<div class="billing-address-form">
											<form action="index.html">
												<p><input type="text" placeholder="Name"></p>
												<p><input type="email" placeholder="Email"></p>
												<p><input type="text" placeholder="Address"></p>
												<p><input type="tel" placeholder="Phone"></p>
												<p><textarea name="bill" id="bill" cols="30" rows="10"
														placeholder="Say Something"></textarea></p>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="card single-accordion">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
											data-target="#collapseTwo" aria-expanded="false"
											aria-controls="collapseTwo">
											Shipping Address
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
									data-parent="#accordionExample">
									<div class="card-body">
										<div class="shipping-address-form">
											<p>Your shipping address form is here.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card single-accordion">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
											data-target="#collapseThree" aria-expanded="false"
											aria-controls="collapseThree">
											Card Details
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
									data-parent="#accordionExample">
									<div class="card-body">
										<div class="card-details">
											<p>Your card details goes here.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
							</tbody>
							<tbody class="checkout-details">
                <tr>
									<td>Sub total </td>
									<td>$ {{ Cart::priceTotal()}}</td>
								</tr>
								<tr>
									<td>precion de envio</td>
									<td>$100</td>
								</tr>

								<tr>
									<td>Total</td>
									<td></td>
								</tr>
							</tbody>
						</table>
            <br>
            <form action="{{ route('paypal.payment') }}" method="POST">
              @csrf
              <!-- Agrega aquí cualquier otro campo que desees enviar a PayPal, como información del pedido, cantidad, etc. -->
              <button type="submit" class="custom-button">Place Order</button>
          </form>


					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

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
