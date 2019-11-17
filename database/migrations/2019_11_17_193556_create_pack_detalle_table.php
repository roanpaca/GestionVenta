<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_detalle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pack_id');
            $table->foreign('pack_id','fk_pack_detalle_pack')->references('id')->on('pack')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id','fk_pack_detalle_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('pack_detalle');
    }
}
