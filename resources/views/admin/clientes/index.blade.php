@extends('admin.layouts.app2')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Registro de Clientes
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table small-device" id="myTable">
                                <thead>
                                <tr>
                                    <th style="width: 10%">Nombre</th>
                                    <th style="width: 10%">A. Paterno</th>
                                    <th style="width: 10%">A. Materno</th>
                                    <th style="width: 10%">Dirección</th>
                                    <th style="width: 10%">Edad</th>
                                    <th style="width: 10%">Sexo</th>
                                    <th style="width: 10%">Teléfono</th>
                                    <th style="width: 10%">Correo</th>
                                    <th style="width: 20%">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($clientes))
                                    @foreach($clientes as $cliente)
                                        <tr>
                                            <td>{{$cliente->nombre1}}</td>
                                            <td>{{$cliente->apPaterno}}</td>
                                            <td>{{$cliente->apMaterno}}</td>
                                            <td>{{$cliente->direccion}}</td>
                                            <td>{{$cliente->edad}}</td>
                                            <td>{{$cliente->sexo}}</td>
                                            <td>{{$cliente->telefono}}</td>
                                            <td>{{$cliente->correo}}</td>
                                            <td style="width: 200px">
                                                <a href="{{url('cliente/editar/'.$cliente->idCustomer)}}"><span style="margin-left: 10px; color: #0259b0" class="fa fa-edit"></span></a>
                                                <a href="{{url('cliente/borrar/'.$cliente->idCustomer)}}"><span style="margin-left: 10px; color: #013468" class="fas fa-trash-alt"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <a href="{{url('cliente/nuevo')}}" class="btn btn-primary"><span class="icon-plus"> Nuevo Cliente</span></a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection
