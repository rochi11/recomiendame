<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transacciones = Transaction::all();
        if($transacciones){
//            dd($transacciones);
            return view('admin.transacciones.index', compact('transacciones'));
        }else {
            return view('admin.transacciones.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transacciones.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaccion = new Transaction();
        $transaccion->estado = $request->estadoTransaccion;
        $transaccion->despacho = $request->despachoTransaccion;
        $transaccion->idTienda = $request->tiendaTransaccion;
        $transaccion->idUser = $request->usuarioTransaccion;
        $transaccion->idCliente = $request->clienteTransaccion;
        $transaccion->idPedido = $request->pedidoTransaccion;
        $transaccion->idProducto = $request->productoTransaccion;
        $transaccion->idDetalle = $request->detalleTransaccion;
        $transaccion->montoConsumo = $request->montoConsumoTransaccion;
        $transaccion->fechaConsumo = $request->fechaConsumoTransaccion;
        $transaccion->medioPago = $request->medioPagoTransaccion;
        $transaccion->tarjetaBancaria = $request->tarjetaTransaccion;
        $transaccion->tipoDocumento = $request->tipoDocTransaccion;
        $transaccion->cantidadProductos = $request->cantidadProductosTransaccion;
        $transaccion->precioLista = $request->precioListaTransaccion;
        $transaccion->descuento = $request->descuentoTransaccion;
        $transaccion->observaciones = $request->observacionTransaccion;
        $transaccion->save();
        return redirect('transaccion/lista');
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
        $transaccion = Transaction::find($id);
        return view('admin.transacciones.show', compact('cliente'));
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
        $transaccion = Transaction::find($id);
        $transaccion->estado = $request->estadoTransaccion;
        $transaccion->despacho = $request->despachoTransaccion;
        $transaccion->idTienda = $request->tiendaTransaccion;
        $transaccion->idUser = $request->usuarioTransaccion;
        $transaccion->idCliente = $request->clienteTransaccion;
        $transaccion->idPedido = $request->pedidoTransaccion;
        $transaccion->idDetalle = $request->detalleTransaccion;
        $transaccion->montoConsumo = $request->montoConsumoTransaccion;
        $transaccion->fechaConsumo = $request->fechaConsumoTransaccion;
        $transaccion->medioPago = $request->medioPagoTransaccion;
        $transaccion->tarjetaBancaria = $request->tarjetaTransaccion;
        $transaccion->tipoDocumento = $request->tipoDocTransaccion;
        $transaccion->cantidadProductos = $request->cantidadProductosTransaccion;
        $transaccion->precioLista = $request->precioListaTransaccion;
        $transaccion->descuento = $request->descuentoTransaccion;
        $transaccion->observacion = $request->observacionTransaccion;
        $transaccion->update();
        return redirect('transacciones/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaccion = Transaction::find($id);
        $transaccion->delete();
        return redirect('transaccion/lista');
    }
}
