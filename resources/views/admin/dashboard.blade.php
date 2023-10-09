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
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">


            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total de usuario</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h3 class="mb-0 me-2">{{ $totalUsers }}</h3>
                                        <small class="text-success">(100%)</small>
                                    </div>
                                    <small>Total de usuarios registrados</small>
                                </div>
                                <span class="badge bg-label-primary rounded p-2">
                                    <i class="bx bx-user bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>total de productos</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h3 class="mb-0 me-2">{{$totalProducts}}</h3>
                                        <small class="text-success">(+95%)</small>
                                    </div>
                                    <small>Recent analytics </small>
                                </div>
                                <span class="badge bg-label-success rounded p-2">
                                    <i class="bx bx-user-check bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Duplicate Users</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h3 class="mb-0 me-2">0</h3>
                                        <small class="text-success">(0%)</small>
                                    </div>
                                    <small>Recent analytics</small>
                                </div>
                                <span class="badge bg-label-danger rounded p-2">
                                    <i class="bx bx-group bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Verification Pending</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h3 class="mb-0 me-2">8</h3>
                                        <small class="text-danger">(+6%)</small>
                                    </div>
                                    <small>Recent analytics</small>
                                </div>
                                <span class="badge bg-label-warning rounded p-2">
                                    <i class="bx bx-user-voice bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

       
        <div class="content-backdrop fade">uwu vhjfkfjjfkjfjkfjkfkjfjfjk</div>
    </div>
@endsection
