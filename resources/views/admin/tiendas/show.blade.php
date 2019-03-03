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
                    <form action="{{url('tienda/actualizar/'.$tienda->idStore)}}" method="post" id="edit-profile" class="form-horizontal">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="nombreTienda" value="{{ $tienda->nombre }}" type="text" placeholder="Nombre Tienda">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="direccionTienda" value="{{ $tienda->direccion }}" type="text" placeholder="Direccion Tienda">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="telefonoTienda" value="{{ $tienda->telefono }}" type="text" placeholder="Telefono Tienda">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="correoTienda" value="{{ $tienda->correoTienda }}" type="text" placeholder="Correo Tienda">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="idUserTienda" value="{{ $tienda->idUser }}" type="text" placeholder="Encargado Tienda">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" name="metaTienda" value="{{ $tienda->meta }}" type="text" placeholder="Meta Tienda">
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