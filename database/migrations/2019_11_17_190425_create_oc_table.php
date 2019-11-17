<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id','fk_pack_proveedor')->references('id')->on('proveedor')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_compra');
            $table->date('fecha_recepcion');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id','fk_oc_estado_oc')->references('id')->on('estado_oc')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_oc_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('oc');
    }
}
