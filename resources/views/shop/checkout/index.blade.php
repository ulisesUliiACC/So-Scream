@extends('layouts/blankLayout')

@section('title', 'Blank layout - Layouts')

@section('content')

@endsection
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
    <nav class="custom-navbar navbar navbar navbar-expand-md " arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brands" href="index.html">Bienvenido {{ Auth::user()->name }}<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('shop.shop') }}">Shop</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">About us</a></li>
                    <li><a class="nav-link" href="services.html">Services</a></li>
                    <li><a class="nav-link" href="blog.html">Blog</a></li>
                    <li><a class="nav-link" href="contact.html">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Shipping Address</h5>
                        <!-- Shipping Address -->
                        <div id="datosDireccionMinimizada" style="display: none; text-align: center;">
                            <h5>Minimized Address Data:</h5>
                            <p><strong></strong> <span id="nombreDireccionMinimizada"></span></p>
                            <a href="#" id="editarDireccionLink">Edit Address</a>
                        </div>

                        <div class="card-body">
                        </div>
                        <hr class="my-0">
                        <div class="card-body " id="direccionEnvioSection">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="nombre" class="form-label">Name</label>
                                        <input class="form-control" type="text" name="nombre" id="nombre" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="apellido" class="form-label">Last Name</label>
                                        <input class="form-control" type="text" name="apellido" id="apellido" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="telefono">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">MX (+52)</span>
                                            <input type="text" id="telefono" name="telefono" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="direccion" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion"
                                            placeholder="Street and Number" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for "referencias" class="form-label">References</label>
                                        <input type="text" class="form-control" id="referencias"
                                            name="referencias" placeholder="Street and Number" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="codigoPostal" class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" id="codigoPostal"
                                            name="codigoPostal" placeholder="231465" maxlength="6" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="estado" class="form-label">State</label>
                                        <input type="text" class="form-control" id="estado" name="estado"
                                            placeholder="State" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="ciudad" class="form-label">City</label>
                                        <input type="text" class="form-control" id="ciudad" name="ciudad"
                                            placeholder="City" />
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2" id="guardarDireccionBtn">Save
                                        Changes and Minimize</button>
                                </div>
                            </form>
                        </div>
                        <!-- /Shipping Address -->
                    </div>
                </div>



                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4 row justify-content-between align-items-center">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <img src="{{ asset('assets/img/icons/unicons/cc-success.png') }}" alt="User"
                                class="rounded">
                            <h5 class="card-title m-0">Resumen de Orden de compra</h5>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div
                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">En total:</h6>
                                        </div>

                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">${{ Cart::priceTotal() }}</h6> <span
                                                class="text-muted">MXN</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div
                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Precio de envio</h6>
                                        </div>

                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">$MXN 2323.10</h6> <span class="text-muted">MXN</span>
                                        </div>
                                        <div class="why-choose-section">
                                          <div class="container">
                                            <!-- Otras partes de tu contenido -->
                                            <!-- ... -->

                                            <!-- Contenedor para el formulario de PayPal -->
                                            <div class="paypal-container">
                                              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                <input type="hidden" name="cmd" value="_s-xclick" />
                                                <input type="hidden" name="hosted_button_id" value="MP6ZHGTSNYK4W" />
                                                <input type="hidden" name="currency_code" value="MXN" />
                                                <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynow_SM.gif" border="0" name="submit" title="PayPal es una forma segura y fácil de pagar en línea." alt="Comprar ahora" />
                                              </form>
                                            </div>

                                            <!-- Otras partes de tu contenido -->
                                            <!-- ... -->
                                          </div>
                                        </div>


                                    </div>
                                </li>
                            </ul>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- /Transactions -->
            </div>


            <div class="col-md-6 col-lg-4 order-2 mb-4 row justify-content-between align-items-center">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0">Resumen de Orden de compra</h5>
                    </div>


                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="contenedor">
                                    <img class="card-img-top  imagen-ajustada" src="integrantes/Michelle.jpg">
                                    <img class="card-img-top  imagen-ajustada" src="integrantes/Michelle.jpg">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>

    <!-- End Header/Navigation -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#guardarDireccionBtn').click(function() {
            // Captura los valores del formulario
            var nombre = $('#nombre').val();
            var apellido = $('#apellido').val();
            var telefono = $('#telefono').val();
            var direccion = $('#direccion').val();
            var referencias = $('#referencias').val();
            var codigoPostal = $('#codigoPostal').val();
            var estado = $('#estado').val();
            var ciudad = $('#ciudad').val();

            // Combina los valores en un único párrafo
            var datosDireccion =
                nombre + ' ' + apellido + '<br>' +
                direccion + '' + codigoPostal + '<br>';

            // Muestra los datos en la vista minimizada
            $('#nombreDireccionMinimizada').html(datosDireccion);

            // Oculta la sección de edición
            $('#direccionEnvioSection').hide();

            // Muestra la sección minimizada
            $('#datosDireccionMinimizada').show();
        });

        // Maneja el clic en "Editar dirección" en la sección minimizada
        $('#editarDireccionLink').click(function() {
            // Oculta la sección minimizada
            $('#datosDireccionMinimizada').hide();

            // Muestra la sección de edición
            $('#direccionEnvioSection').show();
        });
    });
</script>
