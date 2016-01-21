@extends('master')

@section('titulo','Consulta')

@section('contenido')

    <div class="page-header">
        <h1>Consulta 1</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>Nombre cliente</th>
            <th>Sector</th>
            <th>Fecha inicio proyecto</th>
            <th>Nombre proyecto</th>
            </thead>
            @foreach($tuplas as $tupla)
                <tr>
                    <td>{{$tupla->nombres}}</td>
                    <td>{{$tupla->nombre}}</td>
                    <td>{{$tupla->fecha_inicio}}</td>
                    <td>{{$tupla->nombre_proyecto}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop