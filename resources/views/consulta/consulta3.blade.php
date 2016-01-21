@extends('master')

@section('titulo','Consulta 3')

@section('contenido')

    <div class="page-header">
        <h1>Consulta 3</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>ID proyecto</th>
            <th>Fecha inicio proyecto</th>
            <th>Nombre cliente</th>
            <th>Costo total</th>
            </thead>
            @foreach($tuplas as $tupla)
                <tr>
                    <td>{{$tupla->id}}</td>
                    <td>{{$tupla->fecha_inicio}}</td>
                    <td>{{$tupla->nombres}}</td>
                    <td>{{$tupla->costo_final}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop