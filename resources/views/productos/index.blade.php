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
                Lista de 
                <a href="{{route('productos.create')}}">
                <button class="btn btn-secondary create-new btn-primary" aria-controls="DataTables_Table_0" type="button">
                    <span>
                        <i class="bx bx-plus me-sm-1">
                            
                        </i>
                        <span class="d-none d-sm-inline-block" >Nuevo producto</span>
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
                        <th>Codigo</th>
                        <th>precio</th>
                        <th>stock</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger me-3">
                            </i>
                            <strong>Angular Project</strong>
                        </td>
                        <td>Albert Cook</td>
                        <td>
                            <ul class="m-0 list-unstyled users-list avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                        class="rounded-circle">
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
