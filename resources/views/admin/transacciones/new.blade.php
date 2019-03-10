@extends('admin.layouts.app2')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-light">
                        Datos basicos de la transaccion

                        <div class="card-actions">
                            <a href="#" class="btn">
                                <i class="fa fa-pencil-alt"></i>
                            </a>

                            <a href="#" class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>
                    <form action="{{url('transaccion/grabar')}}" method="post" id="edit-profile" class="form-horizontal">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="estadoTransaccion" type="text" placeholder="Estado de la transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="despachoTransaccion" type="text" placeholder="Despacho Transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="tiendaTransaccion" type="text" placeholder="Tienda">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="usuarioTransaccion" type="text" placeholder="Usuario Transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="clienteTransaccion" type="text" placeholder="Cliente Transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="pedidoTransaccion" type="text" placeholder="Pedido Transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="productoTransaccion" type="text" placeholder="Producto Transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="detalleTransaccion" type="text" placeholder="Detalle Transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="montoConsumoTransaccion" type="text" placeholder="Monto Consumo Transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="fechaConsumoTransaccion" type="text" placeholder="Fecha Consumo">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="medioPagoTransaccion" type="text" placeholder="Medio Pago">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="tarjetaTransaccion" type="text" placeholder="Tarjeta Bancaria">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="tipoDocTransaccion" type="text" placeholder="Tipo Documento">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="cantidadProductosTransaccion" type="text" placeholder="Cantidad Productos">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="precioListaTransaccion" type="text" placeholder="Precio Lista">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="descuentoTransaccion" type="text" placeholder="Descuento Transaccion">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="observacionTransaccion" type="text" placeholder="Observacion Transaccion">
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