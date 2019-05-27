<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('idProduct');
            $table->string('nombre')->nullable();
            $table->string('marca')->nullable();
            $table->string('precio')->nullable();
            $table->string('fechaVencimiento')->nullable();
            $table->string('lote')->nullable();
            $table->string('peso')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('unidadMedida')->nullable();
            $table->string('descuento')->nullable();
            $table->string('fechaDescuento')->nullable();
            $table->string('nroGondola')->nullable();
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
        Schema::dropIfExists('products');
    }
}
