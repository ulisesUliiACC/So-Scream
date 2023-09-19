@extends('layouts/contentNavbarLayout')

@section('title', 'ulises')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y" data-select2-id="18">
            
            <h4 class="py-3 mb-4">
  <span class="text-muted fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comercio electrónico / </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Agregar producto</font></font></span>
</h4>

<div class="app-ecommerce" data-select2-id="17">

  <!-- Add Product -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

    <div class="d-flex flex-column justify-content-center">
      <h4 class="mb-1 mt-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Añadir un nuevo producto</font></font></h4>
      <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pedidos realizados en tu tienda</font></font></p>
    </div>
    <div class="d-flex align-content-center flex-wrap gap-3">
      <button class="btn btn-label-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desechar</font></font></button>
      <button class="btn btn-label-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar borrador</font></font></button>
      <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publicar producto</font></font></button>
    </div>

  </div>

  <div class="row">

    <!-- First column-->
    <div class="col-12 col-lg-8">
      <!-- Product Information -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-tile mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Información del Producto</font></font></h5>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
            <input type="text" class="form-control" id="ecommerce-product-name" placeholder="Titulo del producto" name="productTitle" aria-label="Titulo del producto">
          </div>
          <div class="row mb-3">
            <div class="col">
              <label class="form-label" for="ecommerce-product-sku">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Precio</font>
                </font>
              </label>
              <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="precio" name="productSku" aria-label="precio">
            </div>
            <div class="col">
              <label class="form-label" for="ecommerce-product-sku">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Precio socio</font>
                </font>
              </label>
              <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="SKU" name="productSku" aria-label="SKU del producto">
            </div>

            <div class="col">
              <label class="form-label" for="ecommerce-product-sku">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">stock</font>
                </font>
              </label>
              <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="SKU" name="productSku" aria-label="SKU del producto">
            </div>
            
          </div>
          <!-- Description -->
         
        </div>
      </div>
      <!-- /Product Information -->
      <!-- Media -->
     <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0 card-title">Media</h5>
          <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
        </div>
        <div class="card-body">
          <form action="/upload" class="dropzone needsclick dz-clickable" id="dropzone-basic">
            <div class="dz-message needsclick my-5">
              <p class="fs-4 note needsclick my-2">Drag and drop your image here</p>
              <small class="text-muted d-block fs-6 my-2">or</small>
              <span class="note needsclick btn bg-label-primary d-inline" id="btnBrowse">Browse image</span>
            </div>
            
          </form>
        </div>
      </div>
      <!-- /Media -->
      <!-- Variants -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Variantes</font></font></h5>
        </div>
        <div class="card-body">
          <form class="form-repeater">
            <div data-repeater-list="group-a">
              <div data-repeater-item="">
                <div class="row">

                  <div class="mb-3 col-4">
                    <label class="form-label" for="form-repeater-1-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opciones</font></font></label>
                    <div class="position-relative"><select id="form-repeater-1-1" class="select2 form-select select2-hidden-accessible" data-placeholder="Size" data-select2-id="form-repeater-1-1" tabindex="-1" aria-hidden="true">
                      <option value="" data-select2-id="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tamaño</font></font></option>
                      <option value="size"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tamaño</font></font></option>
                      <option value="color"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Color</font></font></option>
                      <option value="weight"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Peso</font></font></option>
                      <option value="smell"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oler</font></font></option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 232.038px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-form-repeater-1-1-container"><span class="select2-selection__rendered" id="select2-form-repeater-1-1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tamaño</font></font></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                  </div>

                  <div class="mb-3 col-8">
                    <label class="form-label invisible" for="form-repeater-1-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No visible</font></font></label>
                    <input type="number" id="form-repeater-1-2" class="form-control" placeholder="Introduzca el tamaño">
                  </div>

                </div>
              </div>
            </div>
            <div>
              <button class="btn btn-primary" data-repeater-create=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Agregar otra opción
              </font></font></button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Variants -->
      <!-- Inventory -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inventario</font></font></h5>
        </div>
        <div class="card-body">
          <div class="row">
            <!-- Navigation -->
            <div class="col-12 col-md-4 mx-auto card-separator">
              <div class="d-flex justify-content-between flex-column mb-3 mb-md-0 pe-md-3">
                <ul class="nav nav-align-left nav-pills flex-column" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#restock" aria-selected="true" role="tab">
                      <i class="bx bx-cube me-2"></i>
                      <span class="align-middle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Repoblar</font></font></span>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#shipping" aria-selected="false" tabindex="-1" role="tab">
                      <i class="bx bx-car me-2"></i>
                      <span class="align-middle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envío</font></font></span>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#global-delivery" aria-selected="false" tabindex="-1" role="tab">
                      <i class="bx bx-globe me-2"></i>
                      <span class="align-middle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrega global</font></font></span>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#attributes" aria-selected="false" tabindex="-1" role="tab">
                      <i class="bx bx-link me-2"></i>
                      <span class="align-middle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atributos</font></font></span>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#advanced" aria-selected="false" tabindex="-1" role="tab">
                      <i class="bx bx-lock me-2"></i>
                      <span class="align-middle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Avanzado</font></font></span>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /Navigation -->
            <!-- Options -->
            <div class="col-12 col-md-8 pt-4 pt-md-0">
              <div class="tab-content p-0 pe-md-5 ps-md-3">
                <!-- Restock Tab -->
                <div class="tab-pane fade show active" id="restock" role="tabpanel">
                  <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opciones</font></font></h5>
                  <label class="form-label" for="ecommerce-product-stock"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Añadir al inventario</font></font></label>
                  <div class="row mb-3 g-3">
                    <div class="col-12 col-sm-9">
                      <input type="number" class="form-control" id="ecommerce-product-stock" placeholder="Cantidad" name="quantity" aria-label="Cantidad"></div>
                    <div class="col-12 col-sm-3">
                      <button class="btn btn-primary"><i class="bx bx-check me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirmar</font></font></button>
                    </div>
                  </div>
                  <div>
                    <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Producto en stock ahora: </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">54</font></font></span></h6>
                    <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Producto en tránsito: </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">390</font></font></span></h6>
                    <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Última reposición: </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24 de junio de 2023</font></font></span></h6>
                    <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stock total durante su vida útil: </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2430</font></font></span></h6>
                  </div>
                </div>
                <!-- Shipping Tab -->
                <div class="tab-pane fade" id="shipping" role="tabpanel">
                  <h5 class="mb-4">Shipping Type</h5>
                  <div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="radio" name="shippingType" id="seller">
                      <label class="form-check-label" for="seller">
                        <span class="mb-1 h6">Fulfilled by Seller</span>
                        <small class="text-muted">You'll be responsible for product delivery.<br>
                          Any damage or delay during shipping may cost you a Damage fee.</small>
                      </label>
                    </div>
                    <div class="form-check mb-5">
                      <input class="form-check-input" type="radio" name="shippingType" id="companyName" checked="">
                      <label class="form-check-label" for="companyName">
                        <span class="mb-1 h6">Fulfilled by Company name &nbsp;<span class="badge rounded-2 badge-warning bg-label-warning fs-tiny py-1">RECOMMENDED</span></span>
                        <br><small class="text-muted">Your product, Our responsibility.<br>
                          For a measly fee, we will handle the delivery process for you.</small>
                      </label>
                    </div>
                    <p class="mb-0">See our <a href="javascript:void(0);">Delivery terms and conditions</a> for details</p>
                  </div>
                </div>
                <!-- Global Delivery Tab -->
                <div class="tab-pane fade" id="global-delivery" role="tabpanel">
                  <h5 class="mb-4">Global Delivery</h5>
                  <!-- Worldwide delivery -->
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="globalDel" id="worldwide">
                    <label class="form-check-label" for="worldwide">
                      <span class="mb-1 h6">Worldwide delivery</span>
                      <small class="text-muted">Only available with Shipping method:
                        <a href="javascript:void(0);">Fulfilled by Company name</a></small>
                    </label>
                  </div>
                  <!-- Global delivery -->
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="globalDel" checked="">
                    <label class="form-check-label w-75 pe-5" for="country-selected">
                      <span class="mb-2 h6">Selected Countries</span>
                      <input type="text" class="form-control" placeholder="Type Country name" id="country-selected">
                    </label>
                  </div>
                  <!-- Local delivery -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="globalDel" id="local">
                    <label class="form-check-label" for="local">
                      <span class="mb-1 h6">Local delivery</span>
                      <small class="text-muted">Deliver to your country of residence :
                        <a href="javascript:void(0);">Change profile address</a></small>
                    </label>
                  </div>
                </div>
                <!-- Attributes Tab -->
                <div class="tab-pane fade" id="attributes" role="tabpanel">
                  <h5 class="mb-4">Attributes</h5>
                  <div>
                    <!-- Fragile Product -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="fragile" id="fragile">
                      <label class="form-check-label" for="fragile">
                        <span class="mb-0 h6">Fragile Product</span>
                      </label>
                    </div>
                    <!-- Biodegradable -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="biodegradable" id="biodegradable">
                      <label class="form-check-label" for="biodegradable">
                        <span class="mb-0 h6">Biodegradable</span>
                      </label>
                    </div>
                    <!-- Frozen Product -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="frozen" checked="">
                      <label class="form-check-label w-75 pe-5" for="frozen">
                        <span class="mb-1 h6">Frozen Product</span>
                        <input type="number" class="form-control" placeholder="Max. allowed Temperature" id="frozen">
                      </label>
                    </div>
                    <!-- Exp Date -->
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" value="expDate" id="expDate" checked="">
                      <label class="form-check-label w-75 pe-5" for="date-input">
                        <span class="mb-1 h6">Expiry Date of Product</span>
                        <input type="text" class="product-date form-control flatpickr-input" id="date-input" readonly="readonly">
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /Attributes Tab -->
                <!-- Advanced Tab -->
                <div class="tab-pane fade" id="advanced" role="tabpanel">
                  <h5 class="mb-4">Advanced</h5>
                  <div class="row">
                    <!-- Product Id Type -->
                    <div class="col">
                      <label class="form-label" for="product-id">
                        <span class="mb-0 h6">Product ID Type</span>
                      </label>
                      <div class="position-relative"><select id="product-id" class="select2 form-select select2-hidden-accessible" data-placeholder="ISBN" data-select2-id="product-id" tabindex="-1" aria-hidden="true">
                        <option value="" data-select2-id="4">ISBN</option>
                        <option value="ISBN">ISBN</option>
                        <option value="UPC">UPC</option>
                        <option value="EAN">EAN</option>
                        <option value="JAN">JAN</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-product-id-container"><span class="select2-selection__rendered" id="select2-product-id-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">ISBN</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                    </div>
                    <!-- Product Id -->
                    <div class="col">
                      <label class="form-label" for="product-id-1">
                        <span class="mb-0 h6">Product ID</span>
                      </label>
                      <input type="number" id="product-id-1" class="form-control" placeholder="ISBN Number">
                    </div>

                  </div>
                </div>
                <!-- /Advanced Tab -->

              </div>
            </div>
            <!-- /Options-->
          </div>
        </div>
      </div>
      <!-- /Inventory -->
    </div>
    <!-- /Second column -->

    <!-- Second column -->
    <div class="col-12 col-lg-4">
      <!-- Pricing Card -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precios</font></font></h5>
        </div>
        <div class="card-body">
          <!-- Base Price -->
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precio base</font></font></label>
            <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Precio" name="productPrice" aria-label="Precio del producto">
          </div>
          <!-- Discounted Price -->
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-discount-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precio descontado</font></font></label>
            <input type="number" class="form-control" id="ecommerce-product-discount-price" placeholder="Precio descontado" name="productDiscountedPrice" aria-label="Precio del producto con descuento">
          </div>
          <!-- Charge tax check box -->
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked="">
            <label class="form-label" for="price-charge-tax"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Cobrar impuestos sobre este producto
            </font></font></label>
          </div>
          <!-- Instock switch -->
          <div class="d-flex justify-content-between align-items-center border-top pt-3">
            <span class="mb-0 h6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En stock</font></font></span>
            <div class="w-25 d-flex justify-content-end">
              <label class="switch switch-primary switch-sm me-4 pe-2">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <span class="switch-off"></span>
                  </span>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <!-- /Pricing Card -->
      <!-- Organize Card -->
      <div class="card mb-4" data-select2-id="16">
        <div class="card-header">
          <h5 class="card-title mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Organizar</font></font></h5>
        </div>
        <div class="card-body">
          <!-- Vendor -->
          <div class="mb-3 col ecommerce-select2-dropdown">
            <label class="form-label mb-1" for="vendor"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Proveedor
            </font></font></label>
            <div class="position-relative"><select id="vendor" class="select2 form-select select2-hidden-accessible" data-placeholder="Select Vendor" data-select2-id="vendor" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccionar proveedor</font></font></option>
              <option value="men-clothing"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ropa de Hombre</font></font></option>
              <option value="women-clothing"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ropa de mujer</font></font></option>
              <option value="kid-clothing"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ropa de niños</font></font></option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-vendor-container"><span class="select2-selection__rendered" id="select2-vendor-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccionar proveedor</font></font></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <!-- Category -->
          <div class="mb-3 col ecommerce-select2-dropdown">
            <label class="form-label mb-1 d-flex justify-content-between align-items-center" for="category-org">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Categoría</font></font></span><a href="javascript:void(0);" class="fw-medium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Añadir nueva categoria</font></font></a>
            </label>
            <div class="position-relative"><select id="category-org" class="select2 form-select select2-hidden-accessible" data-placeholder="Select Category" data-select2-id="category-org" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">selecciona una categoría</font></font></option>
              <option value="Household"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Familiar</font></font></option>
              <option value="Management"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gestión</font></font></option>
              <option value="Electronics"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Electrónica</font></font></option>
              <option value="Office"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oficina</font></font></option>
              <option value="Automotive"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Automotor</font></font></option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-category-org-container"><span class="select2-selection__rendered" id="select2-category-org-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">selecciona una categoría</font></font></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <!-- Collection -->
          <div class="mb-3 col ecommerce-select2-dropdown" data-select2-id="30">
            <label class="form-label mb-1" for="collection"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recopilación
            </font></font></label>
            <div class="position-relative" data-select2-id="29"><select id="collection" class="select2 form-select select2-hidden-accessible" data-placeholder="Collection" data-select2-id="collection" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recopilación</font></font></option>
              <option value="men-clothing" data-select2-id="31"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ropa de Hombre</font></font></option>
              <option value="women-clothing" data-select2-id="32"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ropa de mujer</font></font></option>
              <option value="kid-clothing" data-select2-id="33"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ropa de niños</font></font></option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="9" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-collection-container"><span class="select2-selection__rendered" id="select2-collection-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recopilación</font></font></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <!-- Status -->
          <div class="mb-3 col ecommerce-select2-dropdown" data-select2-id="15">
            <label class="form-label mb-1" for="status-org"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado
            </font></font></label>
            <div class="position-relative" data-select2-id="14"><select id="status-org" class="select2 form-select select2-hidden-accessible" data-placeholder="Published" data-select2-id="status-org" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publicado</font></font></option>
              <option value="Published" data-select2-id="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publicado</font></font></option>
              <option value="Scheduled" data-select2-id="26"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Programado</font></font></option>
              <option value="Inactive" data-select2-id="27"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inactivo</font></font></option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="11" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-org-container"><span class="select2-selection__rendered" id="select2-status-org-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publicado</font></font></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <!-- Tags -->
          <div class="mb-3">
            <label for="ecommerce-product-tags" class="form-label mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etiquetas</font></font></label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Normal" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Normal"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="Remover etiqueta"></x><div><span class="tagify__tag-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Normal</font></font></span></div></tag><tag title="Estándar" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Standard"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="Remover etiqueta"></x><div><span class="tagify__tag-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estándar</font></font></span></div></tag><tag title="De primera calidad" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Premium"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="Remover etiqueta"></x><div><span class="tagify__tag-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">De primera calidad</font></font></span></div></tag><span contenteditable="" tabindex="0" data-placeholder="&ZeroWidthSpace;" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                &ZeroWidthSpace;
        </font></font></tags><input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags" value="Normal,Standard,Premium" aria-label="Etiquetas de productos" tabindex="-1">
          </div>
        </div>
      </div>
      <!-- /Organize Card -->
    </div>
    <!-- /Second column -->
  </div>
</div>


          </div>

@endsection
