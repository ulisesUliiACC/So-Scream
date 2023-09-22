@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

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
    <x-app-layout>


        <h4 class="py-3 mb-4 fw-bold"><span class="text-muted fw-light">UI Elements /</span> Cards Advance
        </h4>

        <div class="row">
            <!-- Employee List -->
            <div class="mb-4 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0 card-title me-2">Info de Cuenta</h5>

                    </div>
                    <div class="card-body">
                        <div class="mb-4 card">
                            <div class="card-body">
                                <div class="user-avatar-section">
                                    <div class=" d-flex align-items-center flex-column">
                                        <img class="my-4 card-photo"

                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                            height="250" width="200" alt="User avatar">
                                        <div class="text-center user-info">
                                            <h4 class="mb-2">{{ Auth::user()->name }}</h4>
                                            <span class="badge bg-label-secondary">Author</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-wrap py-3 my-4 d-flex justify-content-around">
                                    <div class="gap-3 mt-3 d-flex align-items-start me-4">
                                        <span class="p-2 rounded badge bg-label-primary"><i
                                                class="bx bx-check bx-sm"></i></span>
                                        <div>
                                            <h5 class="mb-0">1.23k</h5>
                                            <span>Tasks Done</span>
                                        </div>
                                    </div>
                                    <div class="gap-3 mt-3 d-flex align-items-start">
                                        <span class="p-2 rounded badge bg-label-primary"><i
                                                class="bx bx-customize bx-sm"></i></span>
                                        <div>
                                            <h5 class="mb-0">568</h5>
                                            <span>Projects Done</span>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="pb-2 mb-4 border-bottom">Details</h5>
                                <div class="info-container">
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Username:</span>
                                            <span>{{ Auth::user()->name }}</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Email:</span>
                                            <span>{{ Auth::user()->email }}</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Status:</span>
                                            <span class="badge bg-label-success">Active</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Role:</span>
                                            <span>Author</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Tax id:</span>
                                            <span>Tax-8965</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Contact:</span>
                                            <span>(123) 456-7890</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Languages:</span>
                                            <span>French</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Country:</span>
                                            <span>England</span>
                                        </li>
                                    </ul>
                                    <div class="pt-3 d-flex justify-content-center">
                                        <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                            data-bs-toggle="modal">Edit</a>
                                        <a href="javascript:;" class="btn btn-danger">Suspended</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Employee List -->
            <div class="mb-4 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="m-0 card-title me-2">Info de Cuenta</h5>

                    </div>
                    <div class="card-body">
                        <div class="mb-4 card">
                            <div class="card-body">
                                <div class="user-avatar-section">
                                    <div class=" d-flex align-items-center flex-column">
                                        <img class="my-4 rounded img-fluid"
                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                            height="110" width="110" alt="User avatar">
                                        <div class="text-center user-info">
                                            <h4 class="mb-2">Violet Mendoza</h4>
                                            <span class="badge bg-label-secondary">Author</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-wrap py-3 my-4 d-flex justify-content-around">
                                    <div class="gap-3 mt-3 d-flex align-items-start me-4">
                                        <span class="p-2 rounded badge bg-label-primary"><i
                                                class="bx bx-check bx-sm"></i></span>
                                        <div>
                                            <h5 class="mb-0">1.23k</h5>
                                            <span>Tasks Done</span>
                                        </div>
                                    </div>
                                    <div class="gap-3 mt-3 d-flex align-items-start">
                                        <span class="p-2 rounded badge bg-label-primary"><i
                                                class="bx bx-customize bx-sm"></i></span>
                                        <div>
                                            <h5 class="mb-0">568</h5>
                                            <span>Projects Done</span>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="pb-2 mb-4 border-bottom">Details</h5>
                                <div class="info-container">
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Username:</span>
                                            <span>violet.dev</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Email:</span>
                                            <span>vafgot@vultukir.org</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Status:</span>
                                            <span class="badge bg-label-success">Active</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Role:</span>
                                            <span>Author</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Tax id:</span>
                                            <span>Tax-8965</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Contact:</span>
                                            <span>(123) 456-7890</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Languages:</span>
                                            <span>French</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Country:</span>
                                            <span>England</span>
                                        </li>
                                    </ul>
                                    <div class="pt-3 d-flex justify-content-center">
                                        <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                            data-bs-toggle="modal">Edit</a>
                                        <a href="javascript:;" class="btn btn-danger">Suspended</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
                <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection