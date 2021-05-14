@extends('layout.layout')
@section('content')
@include('navbar.navbarAdmin')
<div class="row">
    <div class="col p-5">
        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h5 class="card-title">Registro de Mascotas</h5>
                <div class="card-text">
                    @if (\Session::has('successAnimal'))
                        <div class="alert alert-success">
                            {!! \Session::get('successAnimal') !!}
                        </div>
                    @endif
                    <form action="{{ route('animal') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Escribe su nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="color" class="form-label">Color</label>
                            <input type="color" class="form-control" name="color" id="color" placeholder="Escoge el color de la mascota" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Genero</label>
                            <select class="form-control" name="gender" required>
                                <option value=""> Selecciona el Genero </option>
                                @foreach (App\Models\Gender::all() as $item)
                                    <option value="{{ $item->genderId }}">{{ $item->genderName }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Raza</label>
                            <select class="form-control" name="colorcast" required>
                                <option value=""> Selecciona la Raza </option>
                                @foreach (App\Models\Colorcast::all() as $item)
                                    <option value="{{ $item->colorcastId }}">{{ $item->colorcastName }} </option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"> Registrar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col p-5">
        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h5 class="card-title">Registro de razas</h5>
                <div class="card-text">
                    @if (\Session::has('successColorcast'))
                        <div class="alert alert-success">
                            {!! \Session::get('successColorcast') !!}
                        </div>
                    @endif
                    <form action="{{ route('colorcast') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Escribe su nombre de la raza" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"> Registrar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection