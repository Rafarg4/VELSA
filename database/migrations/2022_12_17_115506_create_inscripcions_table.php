<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id('id');
            $table->text('primer_nombre');
            $table->text('segundo_nombre');
            $table->text('fechanac');
            $table->text('ci');
            $table->text('sexo');
            $table->text('grupo_sanguineo');
            $table->text('nacionalidad');
            $table->text('celular');
            $table->text('domiciolio');
            $table->text('ciudad');
            $table->text('departamento');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->text('nombre_equipo');
            $table->text('contacto_emergencia');
            $table->text('nombre_apellido_contacto_emergencia');
            $table->text('foto');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inscripcions');
    }
}