<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
			<link href="css/tiny-slider.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
			<title>so Scream </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li><a class="nav-link" href="{{route('shop.shop')}}">Shop</a></li>
                        <li><a class="nav-link" href="{{route('about')}}">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<li><a class="nav-link" href="blog.html">Blog</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="imagenes/user.svg"></a></li>
						<li><a class="nav-link" href="{{ url('carrito') }}"><img src="imagenes/cart.svg"></a></li>
					</ul>
				</div>
			</div>

		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>sobre nosotros </h1>

								<p class="mb-4"></p>

							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
                                <h1> Industria mexicana biotecnológica alimentaria (IMBA)</h1>

							</div>
                            <img src="imagenes/IMBA.png" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->



		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title">Por qué elegirnos</h2>
						<p>Nuestro sustituto de crema en polvo es rico en isoflavonas, fibra soluble, entre otros compuestos y minerales como el hierro, y calcio que tienen beneficios para la salud. SO-CREAM es un sustituto de crema para café que brinda cremosidad sin que este pierda sus características.
            </p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="imagenes/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Envío rápido y gratuito</h3>
									<p>es un servicio o promoción que ofrece la entrega de productos o servicios de manera rápida y sin costo adicional para el cliente. Esta opción es especialmente atractiva para los consumidores, ya que les permite recibir sus pedidos en un plazo reducido de tiempo sin incurrir en gastos adicionales de envío</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="imagenes/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fácil de comprar</h3>
									<p>e enfoca en proporcionar una experiencia al cliente sin obstáculos, lo que puede aumentar la satisfacción del cliente y la probabilidad de que vuelvan a comprar en el futuro</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="imagenes/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>oporte 24 horas al día, 7 días a la semana</h3>
									<p> servicio de atención al cliente o asistencia que está disponible ininterrumpidamente, sin importar la hora del día o el día de la semana. Esto significa que los clientes pueden obtener ayuda, hacer preguntas o resolver problemas en cualquier momento, incluso durante días festivos y fines de semana.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="imagenes/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>evoluciones sin problemas</h3>
									<p>Política clara de devoluciones: La empresa tiene una política de devoluciones fácil de entender y accesible en su sitio web o en la documentación relacionada con el producto o servicio.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="imagenes/taza.Jpeg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Team Section -->
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title">nuesto equipo     </h2>
					</div>
				</div>

				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="integrantes/Michelle.jpg" class="img-fluid mb-5">
						<h3 clas><a href="#"><span class="">Michelle </span> Michelle,</a></h3>
            <span class="d-block position mb-4">CEO, Founder, Atty.</span>
            <p>integrante del equipo de So Cream </p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div>
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="integrantes/Michelle.jpg" class="img-fluid mb-5">

						<h3 clas><a href="#"><span class="">Jeremy</span> Walker</a></h3>
            <span class="d-block position mb-4">CEO, Founder, Atty.</span>
            <p>Separated they live in.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

					</div>
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="integrantes/Michelle.jpg" class="img-fluid mb-5">
						<h3 clas><a href="#"><span class="">Patrik</span> White</a></h3>
            <span class="d-block position mb-4">CEO, Founder, Atty.</span>
            <p>Separated they live in.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="integrantes/Michelle.jpg" class="img-fluid mb-5">

						<h3 clas><a href="#"><span class="">Kathryn</span> Ryan</a></h3>
            <span class="d-block position mb-4">CEO, Founder, Atty.</span>
            <p>Separated they live in.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>


					</div>
					<!-- End Column 4 -->



				</div>
			</div>
		</div>
		<!-- End Team Section -->



		<!-- Start Testimonial Slider -->
		<div class="testimonial-section before-footer-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonios</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Sabor suave y digestión más fácil: Cuando comencé a usar leche de soya en lugar de leche de vaca en mi café, noté una diferencia notable en el sabor. El café de soya tiene un sabor más suave y menos ácido, lo que lo hace más agradable para mi paladar. Además, he experimentado una mejora en mi digestión y una reducción en la acidez estomacal desde que hice el cambio&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="imagenes/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Opción perfecta para mi dieta vegana: Como vegano, el café de soya se ha convertido en una parte esencial de mi rutina matutina. No solo es una alternativa ética a los productos lácteos, sino que también es versátil y se mezcla perfectamente con mis lattes y cappuccinos caseros. Además, me siento bien sabiendo que estoy tomando una decisión más amigable con el medio ambiente.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="imagenes/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Sensación general de bienestar: Desde que dejé de consumir lácteos y opté por el café de soya, he experimentado una sensación de bienestar general. Mi piel ha mejorado, y me siento menos hinchado después de tomar mi café de la mañana. También me gusta la versatilidad de la leche de soya, ya que puedo agregar sabores como vainilla o caramelo para darle un toque extra a mi café.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="imagenes/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->



		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="imagenes/soya.jpg" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="imagenes/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribete para recivir noticias</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">So Scream<span>.</span></a></div>
						<p class="mb-4">Un sustituto de crema en polvo a base de soya y avena para café instantáneo, con un nivel bajo de grasas saturadas (aprox. 3%) lo cual permitirá que sea soluble en agua fría y caliente. Dicho producto tendrá la capacidad de brindar mejoras en la salud del consumidor.
            </p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>


				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->



        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/tiny-slider.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
	</body>

</html>

