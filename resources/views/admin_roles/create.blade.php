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
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end"></small>
            </div>
            <div class="card-body">


                <!-- BEGIN: HTML Table Data -->
                <!-- BEGIN: HTML Table Data -->
                <form method="POST" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre del Rol:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Permisos para este Rol:</label>
                        <br>
                        @foreach($permissions as $permission)
                        <label class="checkbox-inline">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
                            {{ $permission->name }}
                        </label>
                        <br>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Rol</button>
                </form>

            </div>
        </div>
    </div>

@endsection
