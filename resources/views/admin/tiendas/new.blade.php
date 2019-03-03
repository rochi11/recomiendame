@extends('admin.layouts.app2')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-light">
                        Datos basicos de la tienda

                        <div class="card-actions">
                            <a href="#" class="btn">
                                <i class="fa fa-pencil-alt"></i>
                            </a>

                            <a href="#" class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>
                    @if(!isset($tienda))
                        <form action="{{url('tienda/grabar')}}" method="post" id="edit-profile" class="form-horizontal">
                            @else
                                <form action="{{url('tienda/actualizar/'.$tienda->idStore)}}" method="post" id="edit-profile" class="form-horizontal">
                                    @endif
                                    {{ csrf_field() }}
                                    <fieldset>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <input class="form-control" name="nombreTienda" @if(!isset($tienda)) @else value="{{ $tienda->nombre }}" @endif type="text" placeholder="Nombre Tienda">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <input class="form-control" name="direccionTienda" @if(!isset($tienda)) @else value="{{ $tienda->direccion }}" @endif type="text" placeholder="Direccion Tienda">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <input class="form-control" name="telefonoTienda" @if(!isset($tienda)) @else value="{{ $tienda->telefono }}" @endif type="text" placeholder="Telefono Tienda">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <input class="form-control" name="correoTienda" @if(!isset($tienda)) @else value="{{ $tienda->correoTienda }}" @endif type="text" placeholder="Correo Tienda">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <input class="form-control" name="idUserTienda" @if(!isset($tienda)) @else value="{{ $tienda->idUser }}" @endif type="text" placeholder="Encargado Tienda">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <input class="form-control" name="metaTienda" @if(!isset($tienda)) @else value="{{ $tienda->meta }}" @endif type="text" placeholder="Meta Tienda">
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