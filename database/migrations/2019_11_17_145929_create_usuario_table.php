<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',30);
            $table->string('nombre',30);
            $table->string('apaterno',40);
            $table->string('amaterno',40);
            $table->string('rut',10);
            $table->string('genero',1);
            $table->date('fechaNac');
            $table->string('mail',40);
            $table->string('telefono',12);
            $table->string('password',100);
            $table ->boolean('activo');
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
        Schema::dropIfExists('usuario');
    }
}
