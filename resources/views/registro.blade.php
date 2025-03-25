@extends('plantilla')

@section('contenido')
<div class="row justify-content-center">
    <div class="card justify-content-center" style="width: 25rem; background-color: rgba(255, 255, 255, 0.5);">
        <img class="mx-auto d-block" src="{{ asset('img/Itadori.png') }}" height="95" width="125px">
        <div class="card-body row justify-content-center">

            <h1 class="fw-bold text-center">Registro de Usuario</h1>

            <label class="fw-bold" for="nombre">Nombre</label>
            <input name="nombre" id="nombre" class="form-control mb-3" type="text" placeholder="Nombre">

            <label class="fw-bold" for="apellido">Apellido</label>
            <input name="apellido" id="apellido" class="form-control mb-3" type="text" placeholder="Apellido">

            <label class="fw-bold" for="usuario">Usuario</label>
            <input name="usuario" id="usuario" class="form-control mb-3" type="text" placeholder="Usuario">

            <label class="fw-bold" for="correo">Correo Electrónico</label>
            <input name="email" id="email" class="form-control mb-3" type="email" placeholder="name@example.com">

            <label class="fw-bold" for="password">Contraseña</label>
            <input name="password" id="password" class="form-control mb-3" type="password" placeholder="Contraseña">

            <div class="col justify-content-center text-center">
                <button id="btn_registro" class="btn btn-success mb-2"><i class="fa-solid fa-chalkboard-user"></i> Registrar</button>
                <br>
                <a href="login" class="btn btn-link-danger"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
            </div>
        </div>
    </div>
</div>
@endsection