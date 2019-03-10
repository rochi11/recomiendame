@extends('admin.layouts.app2')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Registro de Transacciones
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table small-device" id="myTable">
                                <thead>
                                <tr>
                                    <th style="width: 10%">Estado</th>
                                    <th style="width: 10%">Despacho</th>
                                    <th style="width: 10%">Tienda</th>
                                    <th style="width: 10%">Usuario</th>
                                    <th style="width: 10%">Cliente</th>
                                    <th style="width: 10%">Pedido</th>
                                    <th style="width: 10%">Producto</th>
                                    <th style="width: 10%">Detalle</th>
                                    <th style="width: 10%">Consumo</th>
                                    <th style="width: 10%">Fecha Consumo</th>
                                    <th style="width: 10%">Medio Pago</th>
                                    <th style="width: 10%">T. Bancaria</th>
                                    <th style="width: 10%">Documento</th>
                                    <th style="width: 10%">Cant. Productos</th>
                                    <th style="width: 10%">Precio Producto</th>
                                    <th style="width: 10%">Descuento</th>
                                    <th style="width: 10%">Observaciones</th>
                                    <th style="width: 20%">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($transacciones))
                                    @foreach($transacciones as $transaccion)
                                        <tr>
                                            <td>{{$transaccion->estado}}</td>
                                            <td>{{$transaccion->despacho}}</td>
                                            <td>{{$transaccion->idTienda}}</td>
                                            <td>{{$transaccion->idUsuario}}</td>
                                            <td>{{$transaccion->idCliente}}</td>
                                            <td>{{$transaccion->idPedido}}</td>
                                            <td>{{$transaccion->idProducto}}</td>
                                            <td>{{$transaccion->idDetalle}}</td>
                                            <td>{{$transaccion->montoConsumo}}</td>
                                            <td>{{$transaccion->medioPago}}</td>
                                            <td>{{$transaccion->tarjetaBancaria}}</td>
                                            <td>{{$transaccion->tipoDocumento}}</td>
                                            <td>{{$transaccion->cantidadProductos}}</td>
                                            <td>{{$transaccion->precioLista}}</td>
                                            <td>{{$transaccion->descuento}}</td>
                                            <td>{{$transaccion->observaciones}}</td>
                                            <td style="width: 200px">
                                                <a href="{{url('transaccion/editar/'.$transaccion->idTransaction)}}"><span style="margin-left: 10px; color: #0259b0" class="fa fa-edit"></span></a>
                                                <a href="{{url('transaccion/borrar/'.$transaccion->idTransaction)}}"><span style="margin-left: 10px; color: #013468" class="fas fa-trash-alt"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <a href="{{url('transaccion/nueva')}}" class="btn btn-primary"><span class="icon-plus"> Nuevo Trasaccion</span></a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection
