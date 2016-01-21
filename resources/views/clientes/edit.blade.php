@extends('master')

@section('titulo','Ingresar cliente')

@section('contenido')
    <div class="page-header">
        <h3>Formulario ingreso de nuevo cliente</h3>
    </div>
    @if($errors->has())
        <div class="alert alert-danger">
            <ul>
                <strong>Whoops!</strong> Hubo problemas con tus entradas.
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        {!! Form::model($cliente,['route'=>['cliente.update',$cliente],'class'=>'form-horizontal','method'=>'PUT']) !!}
        <div class="form-group">
            {!! Form::label('rut','Rut',['class'=>'control-label']) !!}
            {!! Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingrese rut sin puntos ni guion',
            'onfocus'=>'formatear_rut();','disabled']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nombres','Nombres',['class'=>'control-label']) !!}
            {!! Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ingrese nombre de empleado']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellido_paterno', 'Apellido Paterno',['class'=>'control-label']) !!}
            {!! Form::text('apellido_paterno', null,['class'=>'form-control','placeholder'=>'Ingrese apellido paterno...']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellido_materno', 'Apellido Materno',['class'=>'control-label']) !!}
            {!! Form::text('apellido_materno', null,['class'=>'form-control','placeholder'=>'Ingrese apellido materno...']) !!}
        </div>
        <div class="form-group date">
            {!! Form::label('fecha_ingreso', 'Fecha Ingreso',['class'=>'control-label']) !!}
            {!! Form::text('fecha_ingreso',null,['class'=>'form-control datepicker',
            'data-provide'=>'datepicker',
            'data-date-format'=>'dd-mm-yyyy',
            'data-date-language'=>'es',
            'data-date-autoclose'=>'true',
            'data-date-today-highlight'=>'true',
            'data-date-calendar-weeks'=>'true',
            'data-date-end-date'=>'0d',
            'data-date-week-start'=>'1',
            'data-date-today-btn'=>'linked']) !!}
        </div>
        <div class="form-group has-feedback">
            {!! Form::label('direccion','Direccion',['class'=>'control-label']) !!}
            {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese direccion']) !!}
            <span class=" glyphicon glyphicon-home form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            {!! Form::label('telefono', 'Telefono',['class'=>'control-label']) !!}
            {!! Form::text('telefono', null,['class'=>'form-control','placeholder'=>'Ingrese numero de telefono...']) !!}
            <span class=" glyphicon glyphicon-earphone form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            {!! Form::label('email', 'Correo Electronico',['class'=>'control-label']) !!}
            {!! Form::text('email', null,['class'=>'form-control','placeholder'=>'Ingrese correo electronico...']) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group">
            {!! Form::label('sector_id', 'Sector',['class'=>'control-label']) !!}
            <select class="form-control" id="sector_id" name="sector_id">
                @foreach(\App\Sector::all() as $sector)
                    <option value="{{ $sector->id }}">{{$sector->nombre}}</option>
                @endforeach
            </select>
        </div>
        <br/>

        {!! Form::submit('Ingresar cliente',['class'=>'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
    <br>
    <br>
    <br>
@stop

@section('javascript')
    {!! Html::script('js/bootstrap-datepicker.js') !!}
    {!! Html::script('js/jquery.Rut.js') !!}
    <script>
        function formatear_rut(){
            $("#rut").Rut({
                validation: true,
                on_error: function(){ alert('Rut ingresado no valido'); }
            });}
    </script>
@stop

