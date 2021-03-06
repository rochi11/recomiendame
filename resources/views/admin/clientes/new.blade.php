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
                        <form action="{{url('cliente/grabar')}}" method="post" id="edit-profile" class="form-horizontal">
                    @else
                        <form action="{{url('cliente/actualizar/'.$cliente->idCustomer)}}" method="post" id="edit-profile" class="form-horizontal">
                    @endif
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="primerNombreCliente" @if(!isset($cliente)) @else value="{{ $cliente->nombre1 }}" @endif type="text" placeholder="Primer Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="segundoNombreCliente" @if(!isset($cliente)) @else value="{{ $cliente->nombre2 }}" @endif type="text" placeholder="Segundo Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="apellidoPaterno" @if(!isset($cliente)) @else value="{{ $cliente->apPaterno }}" @endif type="text" placeholder="Apellido Paterno">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="apellidoMaterno" @if(!isset($cliente)) @else value="{{ $cliente->apMaterno }}" @endif type="text" placeholder="Apellido Materno">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="direccionCliente" @if(!isset($cliente)) @else value="{{ $cliente->direccion }}" @endif type="text" placeholder="Dirección">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="edadCliente" @if(!isset($cliente)) @else value="{{ $cliente->edad }}" @endif type="text" placeholder="Edad">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="sexoCliente" @if(!isset($cliente)) @else value="{{ $cliente->sexo }}" @endif type="text" placeholder="Sexo">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="telefonoCliente" @if(!isset($cliente)) @else value="{{ $cliente->telefono }}" @endif type="text" placeholder="Teléfono">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="correoCliente" @if(!isset($cliente)) @else value="{{ $cliente->correo }}" @endif type="email" placeholder="Correo">
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