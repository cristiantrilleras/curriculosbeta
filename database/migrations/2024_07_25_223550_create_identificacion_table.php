<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificacionTable extends Migration
{
    public function up()
    {
        Schema::create('identificacion', function (Blueprint $table) {
            $table->id();
            $table->string('facultad');
            $table->string('programa');
            $table->string('nombre_curso');
            $table->string('elaborado_por');
            $table->date('fecha_ultima_actualizacion');
            $table->date('fecha_aprobacion_comite_curricular');
            $table->string('idioma');
            $table->string('codigo');
            $table->text('acta_aprobacion_consejo_facultad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('identificacion');
    }
}
