@extends('layout.layout')
@section('content')
@include('navbar.navbarAdmin')
<div class="row justify-content-center p-5">
    <div class="col-9">
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> Nombre Comprador </th>
                        <th> Apellido Comprador </th>
                        <th> Celular Comprador </th>
                        <th> Nombre Mascota </th>
                        <th> Color Mascota </th>
                        <th> Raza Mascota </th>
                        <th> Genero Mascota </th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($buy))
                        @foreach ($buy as $item)
                            <tr>
                                <td> {{ $item->userName }} </td>
                                <td> {{ $item->userLastName }} </td>
                                <td> {{ $item->userPhone }} </td>
                                <td> {{ $item->animalName }} </td>
                                <td style="background-color: {{ $item->animalColor }}" ></td>
                                <td> {{ $item->colorcastName }} </td>
                                <td> {{ $item->genderName }} </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4"> No se encontraron registros </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection