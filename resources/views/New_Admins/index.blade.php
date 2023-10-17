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

        <h4 class="py-3 mb-2"></h4>

        <p>A role provided access to predefined menus and features so that depending on <br> assigned role an administrator
            can have access to what user needs.</p>
        <!-- Role cards -->
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h6 class="fw-normal">Total 7 users</h6>
                            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Jimmy Ressula"
                                    data-bs-original-title="Jimmy Ressula">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/4.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="John Doe"
                                    data-bs-original-title="John Doe">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Kristi Lawker"
                                    data-bs-original-title="Kristi Lawker">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Kaith D'souza"
                                    data-bs-original-title="Kaith D'souza">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Danny Paul"
                                    data-bs-original-title="Danny Paul">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png"
                                        alt="Avatar">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="role-heading">
                                <h4 class="mb-1">Manager</h4>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                    class="role-edit-modal"><small>Edit Role</small></a>
                            </div>
                            <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h6 class="fw-normal">Total 5 users</h6>
                            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Andrew Tye"
                                    data-bs-original-title="Andrew Tye">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Rishi Swaat"
                                    data-bs-original-title="Rishi Swaat">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Rossie Kim"
                                    data-bs-original-title="Rossie Kim">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Kim Merchent"
                                    data-bs-original-title="Kim Merchent">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Sam D'souza"
                                    data-bs-original-title="Sam D'souza">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png"
                                        alt="Avatar">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="role-heading">
                                <h4 class="mb-1">Users</h4>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                    class="role-edit-modal"><small>Edit Role</small></a>
                            </div>
                            <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h6 class="fw-normal">Total 3 users</h6>
                            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Kim Karlos"
                                    data-bs-original-title="Kim Karlos">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/3.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Katy Turner"
                                    data-bs-original-title="Katy Turner">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Peter Adward"
                                    data-bs-original-title="Peter Adward">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Kaith D'souza"
                                    data-bs-original-title="Kaith D'souza">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="John Parker"
                                    data-bs-original-title="John Parker">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/11.png"
                                        alt="Avatar">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="role-heading">
                                <h4 class="mb-1">Support</h4>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                    class="role-edit-modal"><small>Edit Role</small></a>
                            </div>
                            <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h6 class="fw-normal">Total 2 users</h6>
                            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Kim Merchent"
                                    data-bs-original-title="Kim Merchent">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Sam D'souza"
                                    data-bs-original-title="Sam D'souza">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Nurvi Karlos"
                                    data-bs-original-title="Nurvi Karlos">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Andrew Tye"
                                    data-bs-original-title="Andrew Tye">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/8.png"
                                        alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="Rossie Kim"
                                    data-bs-original-title="Rossie Kim">
                                    <img class="rounded-circle"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                        alt="Avatar">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="role-heading">
                                <h4 class="mb-1">Restricted User</h4>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                    class="role-edit-modal"><small>Edit Role</small></a>
                            </div>
                            <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
                                <button data-bs-target="#addRoleModal" data-bs-toggle="modal"
                                    class="btn btn-primary mb-3 text-nowrap add-new-role">Add New Role</button>
                                <p class="mb-0">Add role, if it does not exist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @endsection
