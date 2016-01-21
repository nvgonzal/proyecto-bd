@extends('master')

@section('titulo','Consulta 6')

@section('contenido')

    <div class="page-header">
        <h1>Consulta 6</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>Nombre empleado</th>
            <th>Nombre habilidad</th>
            <th>Valor horas hombre</th>
            <th>Cargo</th>
            </thead>
            @foreach($tuplas as $tupla)
                <tr>
                    <td>{{$tupla->nombres}}</td>
                    <td>{{$tupla->nombre}}</td>
                    <td>{{$tupla->valor_horas_hombre}}</td>
                    <td>{{$tupla->cargo_n}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop