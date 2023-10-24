@extends('layouts/contentNavbarLayout')

@section('title', ' Vertical Layouts - Forms')

@section('content')


    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Informacion de nuevo admin </h5>
                </div>
                <div class="card-body">


                    {!! Form::open(['route' => 'newAdmins.store', 'method' => 'POST']) !!}

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nombre completo</label>
                        <input type="text" name="name" class="form-control" id="basic-default-fullname"
                            placeholder="John Doe" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-email">correo electronico</label>
                        <div class="input-group input-group-merge">
                            <input type="email" name="email" id="basic-default-email" class="form-control"
                                placeholder="so.cream    " aria-label="john.doe" aria-describedby="basic-default-email2" />

                        </div>
                        <div class="form-text"> You can use letters, numbers & periods </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Password</label>
                        <input type="password" name="password" class="form-control" id="basic-default-fullname" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Telefono</label>
                        <input type="tel" name="telefono" id="basic-default-phone" class="form-control phone-mask"
                            placeholder="658 799 8941" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Asigne el Rol a dar</label>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}

                    </div>

                    <button type="submit" class="btn btn-primary">crear</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-xl">
            <div class="card mb-4">

            </div>
        </div>
    </div>

@endsection
