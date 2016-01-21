@extends('master')

@section('titulo','Consulta 5')

@section('contenido')

    <div class="page-header">
        <h1>Consulta 5</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>ID informe</th>
            <th>ID proyecto</th>
            <th>Detalle del informe</th>
            </thead>
            @foreach($tuplas as $tupla)
                <tr>
                    <td>{{$tupla->id}}</td>
                    <td>{{$tupla->proyecto_id}}</td>
                    <td>{{$tupla->texto}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop