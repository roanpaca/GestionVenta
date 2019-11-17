<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockVirtualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_virtual', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('oc_id');
            $table->foreign('oc_id','fk_stock_virtual_oc')->references('id')->on('oc')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('estado');
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
        Schema::dropIfExists('stock_virtual');
    }
}
