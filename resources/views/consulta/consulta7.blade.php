@extends('master')

@section('titulo','Consulta 7')

@section('contenido')

    <div class="page-header">
        <h1>Consulta 7</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>Cliente nombre</th>
            <th>Direccion cliente</th>
            <th>Valor proyecto</th>
            <th>Telefono cliente</th>
            <th>Total costo mes</th>
            </thead>
            @foreach($tuplas as $tupla)
                <tr>
                    <td>{{$tupla->nombres}}</td>
                    <td>{{$tupla->direccion}}</td>
                    <td>{{$tupla->valor}}</td>
                    <td>{{$tupla->telefono}}</td>
                    <td>{{$tupla->total_mes}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop