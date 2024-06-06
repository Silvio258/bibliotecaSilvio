@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Listado de Carreras</h2>
</div>

<div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($degrees as $degree)
                        <tr>
                            <td>{{ $degree->code }}</td>
                            <td>{{ $degree->name }}</td>
                            <td>{{ $degree->description }}</td>
                            <td>
                                   
                                </td>
                                
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>
@endsection