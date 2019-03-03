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
            $table->string('nombre');
            $table->string('marca');
            $table->string('precio');
            $table->string('fechaVencimiento');
            $table->string('lote');
            $table->string('peso');
            $table->string('cantidad');
            $table->string('unidadMedida');
            $table->string('descuento');
            $table->string('fechaDescuento');
            $table->string('nroGondola');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
