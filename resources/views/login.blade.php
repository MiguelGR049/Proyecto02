@extends('plantilla')

@section('contenido')
<form action="" method="post" id="frm_login">
    <div class="row justify-content-center" id="contenido">
        <div class="card justify-content-center" style="width: 25rem; background-color: rgba(255, 255, 255, 0.5);">
            <img class="mx-auto d-block" src="{{ asset('img/kirby.png') }}" width="150px" height="150">
            <div class="card-body row justify-content-center">

                <h1 class="fw-bold text-center">Inicio de Sesion</h1>
                <input name="funcion" type="text" value="iniciar_sesion" hidden>

                <label class="fw-bold" for="usuario">Usuario</label>
                <input name="usuario" id="usuario" class="form-control mb-3" type="text" placeholder="Usuario">

                <label class="fw-bold" for="password">Contraseña</label>
                <input name="password" id="password" class="form-control mb-3" type="password" placeholder="Contraseña">


                <div class="col justify-content-center text-center">
                    <button id="btn_login" class="btn btn-success mb-2" type="submit"><i class="fa-solid fa-right-to-bracket"></i> Iniciar</button>
                    <br>
                    <a href="registro" class="btn btn-link-danger"><i class="fa-solid fa-chalkboard-user"></i> Registro</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection