<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos_mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->timestamp('fecha');

            $table->unsignedBigInteger('mantenimiento_id');
            $table->foreign('mantenimiento_id')->references('id')->on('mantenimientos');
            $table->unsignedBigInteger('equipo_id');
            $table->foreign('equipo_id')->references('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos_mantenimientos');
    }
}
