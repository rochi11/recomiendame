@extends('admin.layouts.app2')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-light">
                        Datos Basicos del Producto

                        <div class="card-actions">
                            <a href="#" class="btn">
                                <i class="fa fa-pencil-alt"></i>
                            </a>

                            <a href="#" class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>
                    <form action="{{url('producto/grabar')}}" method="post" id="edit-profile" class="form-horizontal">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="nombreProducto" type="text" placeholder="Nombre Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="marcaProducto" type="text" placeholder="Marca Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="precioProducto" type="text" placeholder="Precio Producto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="fechaVencimientoProducto" type="text" placeholder="Fecha de Vencimiento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="loteProducto" type="text" placeholder="Lote">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="pesoProducto" type="text" placeholder="Peso">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="cantidadProducto" type="text" placeholder="Cantidad">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="unidadMedidaProducto" type="text" placeholder="Unidad de Medida">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="descuentoProducto" type="text" placeholder="Descuento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="fechaDescuentoProducto" type="text" placeholder="Fecha de Descuento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="numeroGondolaProducto" type="text" placeholder="Numero de Gondola">
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