@extends('admin.layouts.app2')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Registro de Productos
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table small-device" id="myTable">
                                <thead>
                                <tr>
                                    <th style="width: 10%">Nombre</th>
                                    <th style="width: 10%">Marca</th>
                                    <th style="width: 10%">Precio</th>
                                    <th style="width: 10%">FechaVencimiento</th>
                                    <th style="width: 10%">Lote</th>
                                    <th style="width: 10%">Peso</th>
                                    <th style="width: 10%">Cantidad</th>
                                    <th style="width: 10%">UnidadMedida</th>
                                    <th style="width: 10%">Descuento</th>
                                    <th style="width: 10%">FechaDescuento</th>
                                    <th style="width: 10%">Nro. Gondola</th>
                                    <th style="width: 20%">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($productos))
                                    @foreach($productos as $producto)
                                        <tr>
                                            <td>{{$producto->nombre}}</td>
                                            <td>{{$producto->marca}}</td>
                                            <td>{{$producto->precio}}</td>
                                            <td>{{$producto->fechaVencimiento}}</td>
                                            <td>{{$producto->lote}}</td>
                                            <td>{{$producto->peso}}</td>
                                            <td>{{$producto->cantidad}}</td>
                                            <td>{{$producto->unidadMedida}}</td>
                                            <td>{{$producto->descuento}}</td>
                                            <td>{{$producto->fechaDescuento}}</td>
                                            <td>{{$producto->nroGondola}}</td>
                                            <td style="width: 200px">
                                                <a href="{{url('producto/editar/'.$producto->idProduct)}}"><span style="margin-left: 10px; color: #0259b0" class="fa fa-edit"></span></a>
                                                <a href="{{url('producto/borrar/'.$producto->idProduct)}}"><span style="margin-left: 10px; color: #013468" class="fas fa-trash-alt"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <a href="{{url('producto/nuevo')}}" class="btn btn-primary"><span class="icon-plus"> Nuevo Producto</span></a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection
