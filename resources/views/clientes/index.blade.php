@extends('master')

@section('titulo','Lista de clientes')

@section('contenido')
    <a class="btn btn-success boton-fixed btn-lg hidden-sm hidden-xs" data-toggle="tooltip" title="Agregar empleado"
       href="{!! URL::to('cliente/create') !!}">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
    <a class="btn btn-success boton-fixed btn-sm hidden-lg hidden-md" data-toggle="tooltip" title="Agregar empleado"
       href="{!! URL::to('cliente/create') !!}">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>Rut</th>
            <th>Nombres</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Fecha ingreso</th>
            <th>Sector</th>
            <th>Acciones</th>
            </thead>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->rut}}</td>
                    <td>{{$cliente->nombres}}</td>
                    <td>{{$cliente->apellido_paterno}}</td>
                    <td>{{$cliente->apellido_materno}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->fecha_ingreso}}</td>
                    <td>{{$cliente->sector->nombre}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" data-toggle="tooltip" title="Informacion detallada"
                           href="{{ URL::to('clientes/'.$cliente->rut) }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-warning btn-sm" data-toggle="tooltip" title="Editar informacion"
                           href="{{ URL::to('cliente/'.$cliente->rut.'/edit') }}">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger btn-sm" data-toggle="tooltip" title="Eliminar empleado"
                           href="#" onclick="alert('¿Seguro que quiere eliminar empleado?' +
                            '\nPuedes recuperarlo despues');">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    @stop