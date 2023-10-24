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
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-2">
        <!-- Role cards -->
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100">
                    <div class="row h-100">
                        <div class="col-sm-5">
                            <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/sitting-girl-with-laptop-light.png"
                                    class="img-fluid" alt="Image" width="120"
                                    data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                                    data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body text-sm-end text-center ps-sm-0">
                              <a href="{{route('newAdmins.create')}}">
                                <button data-bs-target="#addRoleModal" data-bs-toggle="modal"
                                    class="btn btn-primary mb-3 text-nowrap add-new-role">Añadir nuevo </button>
                                <p class="mb-0">agregue nuevos administradores</p>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">

            <div class="card h-100">
                <div class="row h-100">
                    <div class="col-sm-5">
                        <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/sitting-girl-with-laptop-light.png"
                                class="img-fluid" alt="Image" width="120"
                                data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                                data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body text-sm-end text-center ps-sm-0">
                          @foreach ($admins as $admi )
                          @endforeach
                          </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    </div>
    @endsection
