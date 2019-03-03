<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendas = Store::all();
        if($tiendas){
            return view('admin.tiendas.index', compact('tiendas'));
        }else {
            return view('admin.tiendas.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tiendas.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tienda = new Store();
        $tienda->nombre = $request->nombreTienda;
        $tienda->direccion = $request->direccionTienda;
        $tienda->telefono = $request->telefonoTienda;
        $tienda->correoTienda = $request->correoTienda;
        $tienda->idUser = $request->idUserTienda;
        $tienda->meta = $request->metaTienda;
        $tienda->save();
        return redirect('tiendas/lista');
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
        $tienda = Store::find($id);
        return view('admin.tiendas.new', compact('tienda'));
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
        $tienda = Store::find($id);
        $tienda->nombre = $request->nombreTienda;
        $tienda->direccion = $request->direccionTienda;
        $tienda->telefono = $request->telefonoTienda;
        $tienda->correoTienda = $request->correoTienda;
        $tienda->idUser = $request->idUserTienda;
        $tienda->meta = $request->metaTienda;
        $tienda->update();
        return redirect('tiendas/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tienda = Store::find($id);
        $tienda->delete();
        return redirect('tiendas/lista');
    }
}
