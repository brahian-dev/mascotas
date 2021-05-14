@extends('layout.layout')
@section('content')
@include('navbar.navbar')
<div class="row justify-content-center pt-5">
    <div class="card" style="width: 28rem;">
        <div class="card-body">
            <h5 class="card-title">Inicio de Sesión</h5>
            <h6 class="card-subtitle mb-2 text-muted">Ingreso para Administradores</h6>
            <div class="card-text">
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu correo electronico">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="************">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary"> Enviar </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

