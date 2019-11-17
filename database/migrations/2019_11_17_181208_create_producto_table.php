<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 40);
            $table->integer('codigo');
            $table->bigInteger('Precio_venta');
            $table->bigInteger('Precio_compra')->nullable();
            $table->boolean('estado');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id','fk_producto_categoria')->references('id')->on('categoria')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('producto');
    }
}
