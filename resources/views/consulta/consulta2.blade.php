@extends('master')

@section('titulo','Consulta 2')

@section('contenido')

    <div class="page-header">
        <h1>Consulta 2</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>Nombre cliente</th>
            <th>RUT cliente</th>
            <th>Valor total</th>
            </thead>
            @foreach($tuplas as $tupla)
                <tr>
                    <td>{{$tupla->nombres}}</td>
                    <td>{{$tupla->cliente_rut}}</td>
                    <td>${{$tupla->total}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    @stop