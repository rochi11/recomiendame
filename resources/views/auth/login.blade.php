@extends('layouts.app')

@section('content')


    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/popper.js/popper.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./vendor/chart.js/chart.min.js"></script>
    <script src="./js/carbon.js"></script>
    <script src="./js/demo.js"></script>


    <div class="bg-log"></div>
    <div class="login-table">
        <div class="login-cell">
            <div class="login-container">
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
                <form action="{{ url('/userlogin') }}" method="post">
                    @csrf

                    <div class="login-header">
                        <img src="/img/barcode.jpg">
                        <br><br>
                    </div>
                    <div class="login-body">
                        <div class="clearfix sign">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="inputEmail1" class="control-label">Usuario</label>
                                        <input type="text" class="form-control" id="inputEmail1" name="nombre" placeholder="Ejm: 09456855">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="inputEmail2" class="control-label">Contraseña</label>
                                        <input type="password" name="clave" class="form-control" id="inputEmail2" placeholder="********">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Recordar credenciales
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-send">INGRESAR</button><br>
                                        {{--<button type="button" style="background: #ce2400" onClick="history.back();" class="btn btn-warning btn-send">CANCELAR</button>--}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


@endsection
