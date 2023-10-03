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
       

        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                       <td>Nombre del usuario</td>
                       <td>apellido paterno</td>
                       <td>apellido materno</td>
                       <td>correo electronico</td>
                       <td>Estatus</td>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name}} </td>
                            <td>{{ $user->apellido_P }} </td>
                            <td>{{ $user->apellido_M }} </td>
                            <td>{{ $user->email }} </td>                           
                        </tr>
                    @endforeach
             </tbody>
            </table>
        </div>
    </table>
   
@endsection
