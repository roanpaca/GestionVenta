<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoValorCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_valor_compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id','fk_producto_valor_compra_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->bigInteger('valor');
            $table->unsignedBigInteger('us_modifi_id');
            $table->foreign('us_modifi_id','fk_producto_valor_compra_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('producto_valor_compra');
    }
}
