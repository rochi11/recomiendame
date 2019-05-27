<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Excel;

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
//            dd($clientes);
            return view('admin.clientes.index', compact('clientes'));
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
        $cliente->telefonoFijo = $request->telefonoFijoCliente;
        $cliente->telefonoMovil = $request->telefonoMovilCliente;
        $cliente->ruc = $request->rucCliente;
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Customer::find($id);
        return view('admin.clientes.show', compact('cliente'));
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
        $cliente = Customer::find($id);
        $cliente->nombre1 = $request->primerNombreCliente;
        $cliente->nombre2 = $request->segundoNombreCliente;
        $cliente->apPaterno = $request->apellidoPaterno;
        $cliente->apMaterno = $request->apellidoMaterno;
        $cliente->direccion = $request->direccionCliente;
        $cliente->edad = $request->edadCliente;
        $cliente->sexo = $request->sexoCliente;
        $cliente->telefonoFijo = $request->telefonoFijoCliente;
        $cliente->telefonoMovil = $request->telefonoMovilCliente;
        $cliente->ruc = $request->rucCliente;
        $cliente->correo = $request->correoCliente;
        $cliente->update();
        return redirect('clientes/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Customer::find($id);
        $cliente->delete();
        return redirect('clientes/lista');
    }

    public function import(Request $request)
    {
        return view('admin.clientes.import');
    }

    public function importCustomer (Request $request) {
        //        dd($request);
        $cliente = new Customer();

        Excel::load($request->excel, function($reader) use ($cliente) {
            $excel = $reader->get();
//            dd($excel);
            $reader->each(function($row) use ($cliente) {
                if(!is_null($row->primernombre)){
                    $client = new Customer();
                    $client->nombre1 = $row->primernombre;
                    $client->nombre2 = $row->segundonombre;
                    $client->apPaterno = $row->apellidopaterno;
                    $client->apMaterno = $row->apellidomaterno;
                    $client->direccion = $row->direccion;
                    $client->edad = $row->edad;
                    $client->sexo = $row->sexo;
                    $client->telefonoFijo = $row->telefonofijo;
                    $client->telefonoMovil = $row->telefonomovil;
                    $client->ruc = $row->ruc;
                    $client->correo = $row->correo;
                    $client->save();

                }
            });
        });
//        Notify::success('Productos importados exitosamente','Èxito');
        return redirect('/clientes/lista');
    }
}
