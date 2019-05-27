@extends('admin.layouts.app2')

@section('content')
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Clientes</h3>
            <hr>
        </div>
        <div class="panel-body">
            <div class="links">
                <form method="post" action="{{url('/cliente/importarCliente')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="excel">
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Enviar" style="padding: 10px 20px;">
                </form>
            </div>
        </div>
    </div>
    <!-- END OVERVIEW -->

@endsection