@extends('admin.layouts.app2')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Registro de Tiendas
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table small-device" id="myTable">
                                <thead>
                                <tr>
                                    <th style="width: 10%">Nombre</th>
                                    <th style="width: 10%">Direccion</th>
                                    <th style="width: 10%">Telefono</th>
                                    <th style="width: 10%">Correo</th>
                                    <th style="width: 10%">Encargado</th>
                                    <th style="width: 10%">Meta</th>
                                    <th style="width: 20%">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($tiendas))
                                    @foreach($tiendas as $tienda)
                                        <tr>
                                            <td>{{$tienda->nombre}}</td>
                                            <td>{{$tienda->direccion}}</td>
                                            <td>{{$tienda->telefono}}</td>
                                            <td>{{$tienda->correoTienda}}</td>
                                            <td>{{$tienda->idUser}}</td>
                                            <td>{{$tienda->meta}}</td>
                                            <td style="width: 200px">
                                                <a href="{{url('tienda/editar/'.$tienda->idStore)}}"><span style="margin-left: 10px; color: #0259b0" class="fa fa-edit"></span></a>
                                                <a href="{{url('tienda/borrar/'.$tienda->idStore)}}"><span style="margin-left: 10px; color: #013468" class="fas fa-trash-alt"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <a href="{{url('tienda/nuevo')}}" class="btn btn-primary"><span class="icon-plus"> Nuevo Tienda</span></a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection
