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
    <!-- Hoverable Table rows -->

    <div class="card">
        <h5 class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                Lista de productos
                <a href="{{ route('productos.create') }}">
                    <button class="btn btn-secondary create-new btn-primary" aria-controls="DataTables_Table_0" type="button">
                        <span>
                            <i class="bx bx-plus me-sm-1"></i>
                            <span class="d-none d-sm-inline-block">Nuevo producto</span>
                        </span>
                    </button>
                </a>
            </div>
        </h5>

        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>imagen</th>
                        <th>descripcion</th>
                        <th>precio</th>
                        <th>stock</th>
                        <th>status</th>
                        <th>fecha creado</th>
                        <th>fecha de baja</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre_producto }} </td>
                            <td> <!-- Botón para abrir el modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#imagenModal{{ $producto->id }}">
                                    Imagen
                                </button>
                                <div class="modal fade" id="imagenModal{{ $producto->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel{{ $producto->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel{{ $producto->id }}">Imagen
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Inserta la imagen del producto actual -->
                                                <img src="{{ asset($producto->imagen) }}" alt="Descripción de la imagen"
                                                    class="img-fluid imagen-modal">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $producto->descripcion }} </td>
                            <td>$ {{ $producto->precio }} </td>
                            <td>{{ $producto->stock }} </td>
                            <td>{{ $producto->estado }} </td>
                            <td>{{ $producto->fecha_activo }} </td>
                            <td>{{ $producto->fecha_limite }} </td>
                            <td>
                                <a class="flex items-center mr-3 " href="{{ route('productos.edit', $producto->id) }}">
                                    <i class="bx bx-edit-alt me-2 "></i> Edit
                                </a>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST"
                                    class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn p-1 dropdown-toggle hide-arrow text-danger">
                                        <i class="bx bx-trash me-1"></i>
                                        <a>delete</a></button>
                                </form>

        </div>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    </div>
    </div>





    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        (function() {
            'use strict'
            //crear la clase formEliminar dentro del form del boton borrar
            //recordar que cada registro a eliminar esta contenido en un form
            var forms = document.querySelectorAll('.formEliminar')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        event.preventDefault()
                        event.stopPropagation()
                        Swal.fire({
                            title: '¿Deseas eliminar este producto?!!?',
                            icon: 'info',
                            showCancelButton: true,
                            confirmButtonColor: '#20c997',
                            cancelButtonColor: '#6c757d',
                            confirmButtonText: 'Confirmar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                this.submit();
                                Swal.fire('¡Eliminado!',
                                    'El registro ha sido eliminado exitosamente.', 'success');
                            }
                        })
                    }, false)
                })
        })()
    </script>
@endsection
