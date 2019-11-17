<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCarroCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_carro_compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('carro_compra_id');
            $table->foreign('carro_compra_id', 'fk_detalle_carro_compra_carro_compra')->references('id')->on('carro_compra')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id','fk_detalle_carro_compra_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_carro_compra');
    }
}
