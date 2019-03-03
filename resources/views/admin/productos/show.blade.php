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
                    <form action="{{url('producto/actualizar/'.$producto->idProduct)}}" method="post" id="edit-profile" class="form-horizontal">
                    {{ csrf_field() }}
                        <fieldset>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="nombreProducto" value="{{ $producto->nombre }}" type="text" placeholder="Nombre Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="marcaProducto" value="{{ $producto->marca }}" type="text" placeholder="Marca Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="precioProducto" value="{{ $producto->precio }}" type="text" placeholder="Precio Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="fechaVencimientoProducto" value="{{ $producto->fechaVencimiento }}" type="text" placeholder="Fecha de Vencimiento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="loteProducto" value="{{ $producto->lote }}" type="text" placeholder="Lote">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="pesoProducto" value="{{ $producto->peso }}" type="text" placeholder="Peso">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="cantidadProducto" value="{{ $producto->cantidad }}" type="text" placeholder="Cantidad">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="unidadMedidaProducto" value="{{ $producto->unidadMedida }}" type="text" placeholder="Unidad de Medida">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="descuentoProducto" value="{{ $producto->descuento }}" type="text" placeholder="Descuento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="fechaDescuentoProducto" value="{{ $producto->fechaDescuento }}" type="text" placeholder="Fecha de Descuento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="numeroGondolaProducto" value="{{ $producto->nroGondola }}" type="text" placeholder="Numero de Gondola">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-warning"> Actualizar</button>
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