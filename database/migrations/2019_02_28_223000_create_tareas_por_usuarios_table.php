<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareasPorUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas_por_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tareas_id')->unsigned();            
            $table->foreign('tareas_id')->references('id')->on('tareas');
            $table->integer('usuarios_id')->unsigned();            
            $table->foreign('usuarios_id')->references('id')->on('users');
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
        Schema::dropIfExists('tareas_por_usuarios');
    }
}
