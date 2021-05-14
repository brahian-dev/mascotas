@extends('layout.layout')
@section('content')
@include('navbar.navbar')
<div class="row justify-content-center pt-5">
    <div class="card" style="width: 28rem;">
        <div class="card-body">
            <h5 class="card-title">Registro</h5>
            <h6 class="card-subtitle mb-2 text-muted">Adquirir mascotas</h6>
            <div class="card-text">
                @if (\Session::has('successAnimalPayment'))
                    <div class="alert alert-success">
                        {!! \Session::get('successAnimalPayment') !!}
                    </div>
                @endif
                <form action="{{ route('user') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Escribe tu nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Escribe tu apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="form-label">Correo</label>
                        <input type="mail" class="form-control" name="mail" id="mail" placeholder="Escribe tu correo" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Escribe tu telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="mascot" class="form-label">Mascota</label>
                        <select name="mascot" id="mascot" class="form-control" required>
                            <option value="">Selecciona tu mascota</option>
                            @foreach (App\Models\Animal::where('state_stateId', App\Models\State::getState('available'))->get() as $item)
                                <option value="{{ $item->animalId }}">{{ $item->animalName }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="method" class="form-label">Metodo de pago</label>
                        <select name="method" id="method" class="form-control" required>
                            <option value="">Selecciona tu metodo de pago</option>
                            @foreach (App\Models\paymentMethod::all() as $item)
                                <option value="{{ $item->paymetMethodId }}">{{ $item->paymetMethodName }} </option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary"> Enviar </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

