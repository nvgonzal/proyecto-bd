<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index')->with('clientes',$clientes);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = [
            'rut' => $request->input('rut'),
            'nombres' => $request->input('nombres'),
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno'),
            'fecha_ingreso' => $request->input('fecha_ingreso'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'sector' => $request->input('sector_id')
        ];
        $rules = [
            'rut' => 'unique:clientes,rut|required|max:12',
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'fecha_ingreso' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'sector' => 'required|exists:sectores,id'
        ];

        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            return redirect()->to('cliente/create')->withInput()->withErrors($validacion->messages());
        }


        $cliente = new Cliente();
        $cliente->setAttribute('rut',$request->input('rut'));
        $cliente->setAttribute('nombres',$request->input('nombres'));
        $cliente->setAttribute('apellido_paterno',$request->input('apellido_paterno'));
        $cliente->setAttribute('apellido_materno',$request->input('apellido_materno'));
        $cliente->setAttribute('fecha_ingreso',$request->input('fecha_ingreso'));
        $cliente->setAttribute('direccion',$request->input('direccion'));
        $cliente->setAttribute('telefono',$request->input('telefono'));
        $cliente->setAttribute('email',$request->input('email'));
        $cliente->setAttribute('sector_id',$request->input('sector_id'));
        $exito=$cliente->save();
        if($exito)
        {
            Flash::success('Cliente ingresado con exito');
            return redirect('cliente');
        }
        else
        {
            Flash::error('Cliente no pudo ser ingresado');
            return redirect('cliente');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($rut)
    {
        $cliente=Cliente::find($rut);
        return view('clientes.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rut)
    {
        $input = [
            'nombres' => $request->input('nombres'),
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno'),
            'fecha_ingreso' => $request->input('fecha_ingreso'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'sector' => $request->input('sector_id')
        ];
        $rules = [
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'fecha_ingreso' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'sector' => 'required|exists:sectores,id'
        ];

        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            return redirect()->to('cliente/'.$rut.'/edit')->withInput()->withErrors($validacion->messages());
        }
        $cliente = Cliente::find($rut);
        $cliente->setAttribute('nombres',$request->input('nombres'));
        $cliente->setAttribute('apellido_paterno',$request->input('apellido_paterno'));
        $cliente->setAttribute('apellido_materno',$request->input('apellido_materno'));
        $cliente->setAttribute('fecha_ingreso',$request->input('fecha_ingreso'));
        $cliente->setAttribute('direccion',$request->input('direccion'));
        $cliente->setAttribute('telefono',$request->input('telefono'));
        $cliente->setAttribute('email',$request->input('email'));
        $cliente->setAttribute('sector_id',$request->input('sector_id'));
        $exito=$cliente->save();
        if($exito)
        {
            Flash::success('Cliente ingresado con exito');
            return redirect('cliente');
        }
        else
        {
            Flash::error('Cliente no pudo ser ingresado');
            return redirect('cliente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
