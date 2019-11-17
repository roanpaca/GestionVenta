<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_detalle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('oc_id');
            $table->foreign('oc_id','fk_oc_detalle_oc')->references('id')->on('oc')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id','fk_oc_detalle_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('cantidad');
            $table->bigInteger('valor_unitario');
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
        Schema::dropIfExists('oc_detalle');
    }
}
