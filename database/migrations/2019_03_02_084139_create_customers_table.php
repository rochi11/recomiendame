<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('idCustomer');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->string('direccion');
            $table->string('edad');
            $table->string('sexo');
            $table->string('telefonoFijo');
            $table->string('telefonoMovil');
            $table->string('ruc');
            $table->string('correo');
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
        Schema::dropIfExists('customers');
    }
}
