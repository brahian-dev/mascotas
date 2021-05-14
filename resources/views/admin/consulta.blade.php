@extends('layout.layout')
@section('content')
@include('navbar.navbarAdmin')
<div class="row justify-content-center p-5">
    <div class="col-6">
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> Nombre </th>
                        <th> Color </th>
                        <th> Raza </th>
                        <th> Genero </th>
                        <th> Estado </th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($animals))
                        @foreach ($animals as $item)
                            <tr>
                                <td> {{ $item->animalName }} </td>
                                <td style="background-color: {{ $item->animalColor }}" ></td>
                                <td> {{ $item->colorcastName }} </td>
                                <td> {{ $item->genderName }} </td>
                                <td> {{ $item->stateName }} </td>
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