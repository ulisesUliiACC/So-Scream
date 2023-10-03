
@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">

      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <div class="hero-img-wrap">
                <img src="imagenes/So-Cream.jpg" class="img-fluid">
            </div>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Registro :)</h4>
          

          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="username" name="name" placeholder="Ingresa tu nombre" autofocus required>
            </div>
            <div class="mb-3">
                <label for="apellido_P" class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" id="apellido_P" name="apellido_P" placeholder="Ingresa tu apellido paterno" autofocus>
            </div>
            <div class="mb-3">
                <label for="apellido_M" class="form-label">Apellido materno</label>
                <input type="text" class="form-control" id="apellido_M" name="apellido_M" placeholder="Ingresa tu apellido materno" autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Contraseña</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="••••••••" aria-describedby="password" minlength="8" required>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
        
            <button class="btn btn-primary d-grid w-100">Registrarse</button>
        </form>
          
        </div>
      </div>
    </div>
    <!-- Register Card -->
  </div>
</div>
</div>
@endsection
