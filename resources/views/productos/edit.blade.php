@extends('layouts/contentNavbarLayout')

@section('title', 'ulises')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
<div class="app-ecommerce" data-select2-id="17">
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <!-- Add Product -->
      <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

          <div class="d-flex flex-column justify-content-center">
              <h4 class="mb-1 mt-3">
                  <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Añadir un nuevo producto</font>
                  </font>
              </h4>
              <p class="text-muted">
                  <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Pedidos realizados en tu tienda</font>
                  </font>
              </p>
          </div>
          <div class="d-flex align-content-center flex-wrap gap-3">
              <button type="submit" class="btn btn-primary">
                  <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Publicar producto</font>
                  </font>
              </button>
          </div>

      </div>

      <div class="row">

          <!-- First column-->
          <div class="col-12 col-lg-8">
              <!-- Product Information -->
              <div class="card mb-4">
                  <div class="card-header">
                      <h5 class="card-tile mb-0">
                          <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Información del Producto</font>
                          </font>
                      </h5>
                  </div>

                  <div class="card-body">
                      <div class="mb-3">
                          <label class="form-label" for="ecommerce-product-name">
                              <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">Nombre</font>
                              </font>
                          </label>
                          <input type="text" class="form-control" id="ecommerce-product-name"
                              placeholder="Titulo del producto" name="nombre_producto" aria-label="Titulo del producto">
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Descripcion</label>
                          <textarea id="basic-default-message" name="descripcion" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                      </div>
                      <div class="row mb-3">
                          <div class="col">
                              <label class="form-label" for="ecommerce-product-sku">
                                  <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">Precio</font>
                                  </font>
                              </label>
                              <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="precio $$"
                                  name="precio" aria-label="precio $$" step="any">
                          </div>
                          <div class="col">
                              <label class="form-label" for="ecommerce-product-sku">
                                  <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">Stock</font>
                                  </font>
                              </label>
                              <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="Stock"
                                  name="stock" aria-label="SKU del producto">
                          </div>

                         
                          <div class="col">
                            <label class="form-label" for="ecommerce-product-sku">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">fecha de alta</font>
                                </font>
                            </label>
                            <input type="date" class="form-control" id="ecommerce-product-sku" placeholder="precio"
                                name="fecha_activo" aria-label="precio">
                          </div>
                        <div class="col">
                          <label class="form-label" for="ecommerce-product-sku">
                              <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">fecha</font>
                              </font>
                          </label>
                          <input type="date" class="form-control" id="ecommerce-product-sku" placeholder="precio"
                              name="fecha_limite" aria-label="precio">
                              
                      </div>
                      </div>
                      <font style="vertical-align: inherit;">estado</font>
                      <label class="form-check-label" for="estado">
                          Estado
                      </label>
                      <div class="form-check form-switch mb-2">
                          <input class="form-check-input" type="checkbox" id="estado" name="estado">
                          <input type="hidden" name="estado" value="false"> <!-- Valor predeterminado -->
                          <label class="form-check-label" for="estado">
                              <span id="estadoLabelBadge" class="badge bg-label-success">Activo</span>
                              <span id="estadoLabelBadgeInactive" class="badge bg-label-danger">Inactivo</span>
                          </label>
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

                  </div>
                  <div class="card-body">
                      <!-- Para ver la imagen seleccionada, de lo contrario no se -->
                      <div class="container mt-5">
                          <div class="row">
                              <div class="col-12 text-center">
                                  <img id="imagenSeleccionada" style="max-height: 200px;">
                              </div>
                          </div>

                          <div class="row mt-5">
                              <div class="col-12">
                                  <div class="card">
                                      <div class="card-body">
                                          <label
                                              class="text-uppercase small text-muted font-weight-bold mb-1 w-100">Subir
                                              Imagen</label>
                                          <div class="d-flex justify-content-center align-items-center w-10">
                                              <label
                                                  class="border border-4 border-dashed w-10 h-32 text-center p-4 mb-100 hover:bg-light">
                                                  <div
                                                      class="d-flex flex-column justify-content-center align-items-center">
                                                      <svg class="w-10 h-10 text-primary mb-2" fill="none"
                                                          stroke="currentColor" viewBox="0 0 24 24"
                                                          xmlns="http://www.w3.org/2000/svg">
                                                          <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                          </path>
                                                      </svg>
                                                      <p class="small text-muted mb-0">Seleccione la imagen</p>
                                                  </div>
                                                  <input name="imagen" id="imagen" type="file"
                                                      class="d-none" />
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                  <!-- /Media -->

              </div>
              <!-- /Second column -->

          </div>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
      $(document).ready(function(e) {
          $('#imagen').change(function() {
              let reader = new FileReader();
              reader.onload = (e) => {
                  $('#imagenSeleccionada').attr('src', e.target.result);
              }
              reader.readAsDataURL(this.files[0]);
          });
      });
  
  
      /// estados del producto a activo y inactivo
  
      
      const estadoCheckbox = document.getElementById('estado');
      const estadoLabelBadge = document.getElementById('estadoLabelBadge');
      const estadoLabelBadgeInactive = document.getElementById('estadoLabelBadgeInactive');

      estadoCheckbox.addEventListener('change', function () {
        if (estadoCheckbox.checked) {
            estadoLabelBadge.style.display = 'inline';
            estadoLabelBadgeInactive.style.display = 'none';
            // Configura el valor del campo "estado" como true cuando está marcado
            estadoCheckbox.value = 'true';
          } else {
              estadoLabelBadge.style.display = 'none';
              estadoLabelBadgeInactive.style.display = 'inline';
              // Configura el valor del campo "estado" como false cuando está desmarcado
              estadoCheckbox.value = 'false';
  }
});

// Inicialmente, ocultar el estado "Inactivo" si el interruptor está marcado
        if (estadoCheckbox.checked) {
            estadoLabelBadge.style.display = 'inline';
            estadoLabelBadgeInactive.style.display = 'none';
            // Configura el valor del campo "estado" como true si inicialmente está marcado
            estadoCheckbox.value = 'true';
          } else {
             estadoLabelBadge.style.display = 'none';
             estadoLabelBadgeInactive.style.display = 'inline';
             // Configura el valor del campo "estado" como false si inicialmente está desmarcado
             estadoCheckbox.value = 'false';
}

  </script>
   
@endsection
