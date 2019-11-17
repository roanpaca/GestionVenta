<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('carro_compra_id');
            $table->foreign('carro_compra_id', 'fk_detalle_venta_carro_compra')->references('id')->on('carro_compra')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('medio_pago_id');
            $table->foreign('medio_pago_id', 'fk_medio_pago_id_medio_pago')->references('id')->on('medio_pago')->onDelete('restrict')->onUpdate('restrict');
            $table->bigInteger('total');
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
        Schema::dropIfExists('venta');
    }
}
