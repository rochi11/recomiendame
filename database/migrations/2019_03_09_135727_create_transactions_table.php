<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('idTransaction');
            $table->string('estado');
            $table->string('despacho');
            $table->integer('idTienda');
            $table->integer('idUser');
            $table->integer('idCliente');
            $table->integer('idPedido');
            $table->integer('idProducto');
            $table->integer('idDetalle');
            $table->string('montoConsumo');
            $table->string('fechaConsumo');
            $table->string('medioPago');
            $table->string('tarjetaBancaria');
            $table->string('tipoDocumento');
            $table->string('cantidadProductos');
            $table->string('precioLista');
            $table->string('descuento');
            $table->string('observaciones');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
