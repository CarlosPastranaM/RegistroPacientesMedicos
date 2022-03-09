<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable();
            $table->string('apellido_p', 100)->nullable();
            $table->string('apellido_m', 100)->nullable();
            $table->integer('edad')->nullable();
            $table->integer('codigo_postal')->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('ciudad', 100)->nullable();
            $table->string('delegacion', 100)->nullable();
            $table->string('colonia', 100)->nullable();
            $table->string('padecimiento', 100);
            $table->string('medicamento', 100);
            $table->date('fecha_inicio');
            $table->integer('medico_id')->nullable();
            $table->foreign('medico_id')->references('id')->on('medicos');
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
        Schema::dropIfExists('pacientes');
    }
}
