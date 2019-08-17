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
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idProducto');
            $table->string('nombreProducto')->nullable();
            $table->string('marcaProducto')->nullable();
            $table->string('descripcionProducto')->nullable();
            $table->string('codigoBarras')->nullable();
            $table->string('imagenReferencia')->nullable();
            $table->string('pesoProducto')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('proveedor')->nullable();
            $table->string('categoria')->nullable();
            $table->string('origen')->nullable();
            $table->string('fechaElaboracion')->nullable();
            $table->string('fechaVencimiento')->nullable();
            $table->string('cantidadxUnidad')->nullable();
            $table->string('precioCoste')->nullable();
            $table->string('precioUnidad')->nullable();
            $table->string('numeroLote')->nullable();
            $table->string('unidadesExitentes')->nullable();
            $table->string('unidadesPedidas')->nullable();
            $table->string('nivelNuevoPedido')->nullable();
            $table->string('Suspendido')->nullable();
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
