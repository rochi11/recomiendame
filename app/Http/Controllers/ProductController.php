<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Product::all();
        if($productos){
//            dd($productos);
            return view('admin.productos.index', compact('productos'));
        }else {
            return view('admin.productos.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Product();
        $producto->nombre = $request->nombreProducto;
        $producto->marca = $request->marcaProducto;
        $producto->precio = $request->precioProducto;
        $producto->fechaVencimiento = $request->fechaVencimientoProducto;
        $producto->lote = $request->loteProducto;
        $producto->peso = $request->pesoProducto;
        $producto->cantidad = $request->cantidadProducto;
        $producto->unidadMedida = $request->unidadMedidaProducto;
        $producto->descuento = $request->descuentoProducto;
        $producto->fechaDescuento = $request->fechaDescuentoProducto;
        $producto->nroGondola = $request->numeroGondolaProducto;
        $producto->save();
        return redirect('productos/lista');
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
        $producto = Product::find($id);
        return view('admin.productos.show', compact('producto'));
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
        $producto = Product::find($id);
        $producto->nombre = $request->nombreProducto;
        $producto->marca = $request->marcaProducto;
        $producto->precio = $request->precioProducto;
        $producto->fechaVencimiento = $request->fechaVencimientoProducto;
        $producto->lote = $request->loteProducto;
        $producto->peso = $request->pesoProducto;
        $producto->cantidad = $request->cantidadProducto;
        $producto->unidadMedida = $request->unidadMedidaProducto;
        $producto->descuento = $request->descuentoProducto;
        $producto->fechaDescuento = $request->fechaDescuentoProducto;
        $producto->nroGondola = $request->numeroGondolaProducto;
        $producto->update();
        return redirect('productos/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Product::find($id);
        $producto->delete();
        return redirect('productos/lista');
    }
}
