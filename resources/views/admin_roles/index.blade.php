@extends('layouts/contentNavbarLayout')

@section('title', 'ulises')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
  {{-- inicio de roles--}}

<div class="container-xxl flex-grow-1 container-p-y">

  <h4 class="py-3 mb-2"></h4>

  <p>Asignacion de roles creacion de permisos</p>
  <!-- Role cards -->
  {{--
  <div class="row g-4">
      <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                      <h6 class="fw-normal">Total 4 users</h6>
                      <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                              class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                              data-bs-original-title="Vinnie Mostowy">
                              <img class="rounded-circle"
                                  src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png"
                                  alt="Avatar">
                          </li>
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                              class="avatar avatar-sm pull-up" aria-label="Allen Rieske"
                              data-bs-original-title="Allen Rieske">
                              <img class="rounded-circle"
                                  src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png"
                                  alt="Avatar">
                          </li>
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                              class="avatar avatar-sm pull-up" aria-label="Julee Rossignol"
                              data-bs-original-title="Julee Rossignol">
                              <img class="rounded-circle"
                                  src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png"
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
                              class="avatar avatar-sm pull-up" aria-label="John Doe"
                              data-bs-original-title="John Doe">
                              <img class="rounded-circle"
                                  src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png"
                                  alt="Avatar">
                          </li>
                      </ul>
                  </div>
                  <div class="d-flex justify-content-between align-items-end">
                      <div class="role-heading">
                          <h4 class="mb-1">Administrator</h4>
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
--}}
  {{--fin del roles--}}
<div class="card">
  <h5 class="card-header">Creacion de roles a asignar</h5>
   <h5 class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                Lista de Roles Aministrativos
                <a href="{{ route('roles.create') }}">
                    <button class="btn btn-secondary create-new btn-primary" aria-controls="DataTables_Table_0" type="button">
                        <span>
                            <i class="bx bx-plus me-sm-1"></i>
                            <span class="d-none d-sm-inline-block">Nuevo Rol</span>
                        </span>
                    </button>
                </a>
            </div>
        </h5>
  <div class="table-responsive text-nowrap">

    <table class="table">

      <thead class="table-light">
        <tr>
          <th>Nombre del rol</th>
          <th>Acciones de rol</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($roles as $role)
        <tr>
            <td>
                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                <strong>{{ $role->name }}</strong>
            </td>

            <td>
              @if ($roles->isEmpty())
              <tr>
                  <td colspan="3">
                      <span>No hay roles definidos. El usuario es un superadmin por defecto.</span>
                  </td>
              </tr>
          @else
                    <ul>
                        @foreach ($role->permissions as $permission)
                            <li>{{ $permission->name }}</li>
                        @endforeach
                    </ul>
                @endif
            </td>

            <td>
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach


      </tbody>
    </table>
  </div>
</div>


@endsection
