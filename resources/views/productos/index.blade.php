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
                <a href="{{route('productos.create')}}">
                    <button class="btn btn-secondary create-new btn-primary" aria-controls="DataTables_Table_0" type="button">
                        <span>
                            <i class="bx bx-plus me-sm-1"></i>
                            <span class="d-none d-sm-inline-block">Nuevo producto</span>
                        </span>
                    </button>
                </a>
            </div>
        </h5>

        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
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
                            <td>{{$producto->nombre_producto}} </td>
                            <td>{{$producto->imagen}} </td>
                            <td>{{$producto->descripcion}} </td>
                            <td>{{$producto->precio}} </td>
                            <td>{{$producto->stock}} </td>
                            <td>{{$producto->estado}} </td>
                            <td>{{$producto->fecha_activo}} </td>
                            <td>{{$producto->fecha_limite}} </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" ><i class="bx bx-edit-alt "></i> Edit</a>
                                        <a class="dropdown-item"><i class="bx bx-trash "></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Agrega tu contenido de acciones aquí --}}
    @section('acciones')
        <!-- Tu contenido de acciones aquí -->
    @endsection
@endsection
