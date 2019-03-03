<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Customer::all();
        if($clientes){
            return view('admin.clientes.index', compact($clientes));
        }else {
            return view('admin.clientes.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Customer();
        $cliente->nombre1 = $request->primerNombreCliente;
        $cliente->nombre2 = $request->segundoNombreCliente;
        $cliente->apPaterno = $request->apellidoPaterno;
        $cliente->apMaterno = $request->apellidoMaterno;
        $cliente->direccion = $request->direccionCliente;
        $cliente->edad = $request->edadCliente;
        $cliente->sexo = $request->sexoCliente;
        $cliente->telefono = $request->telefonoCliente;
        $cliente->correo = $request->correoCliente;
        $cliente->save();
        return redirect('clientes/lista');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
