@extends('admin.layouts.app2')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-light">
                        Datos basicos del contacto

                        <div class="card-actions">
                            <a href="#" class="btn">
                                <i class="fa fa-pencil-alt"></i>
                            </a>

                            <a href="#" class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>
                    @if(!isset($cliente))
                        <form action="{{url('producto/grabar')}}" method="post" id="edit-profile" class="form-horizontal">
                    @else
                        <form action="{{url('producto/actualizar/'.$producto->idProduct)}}" method="post" id="edit-profile" class="form-horizontal">
                    @endif
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="nombreProducto" @if(!isset($producto)) @else value="{{ $producto->nombre }}" @endif type="text" placeholder="Nombre Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="marcaProducto" @if(!isset($producto)) @else value="{{ $producto->marca }}" @endif type="text" placeholder="Marca Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="precioProducto" @if(!isset($producto)) @else value="{{ $producto->precio }}" @endif type="text" placeholder="Precio Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="fechaVencimientoProducto" @if(!isset($producto)) @else value="{{ $producto->fechaVencimiento }}" @endif type="text" placeholder="Fecha de Vencimiento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="loteProducto" @if(!isset($producto)) @else value="{{ $producto->lote }}" @endif type="text" placeholder="Lote">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="pesoProducto" @if(!isset($producto)) @else value="{{ $producto->peso }}" @endif type="text" placeholder="Peso">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="cantidadProducto" @if(!isset($producto)) @else value="{{ $producto->cantidad }}" @endif type="text" placeholder="Cantidad">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="unidadMedidaProducto" @if(!isset($producto)) @else value="{{ $producto->unidadMedida }}" @endif type="text" placeholder="Unidad de Medida">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="descuentoProducto" @if(!isset($producto)) @else value="{{ $producto->descuento }}" @endif type="text" placeholder="Descuento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="fechaDescuentoProducto" @if(!isset($producto)) @else value="{{ $producto->fechaDescuento }}" @endif type="text" placeholder="Fecha de Descuento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="numeroGondolaProducto" @if(!isset($producto)) @else value="{{ $producto->nroGondola }}" @endif type="text" placeholder="Numero de Gondola">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"> Grabar</button>
                                    <button type="button" onClick="history.back();" class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection