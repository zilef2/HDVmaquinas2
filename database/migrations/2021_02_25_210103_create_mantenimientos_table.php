<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nombre');
            $table->date('fecha_programada');
            $table->string('tipo');
            $table->string('procedimiento');
            $table->string('insumos');
            $table->string('repuestos');
            $table->integer('activo');
        });
    }

    public function down(){Schema::dropIfExists('mantenimientos');}
}
