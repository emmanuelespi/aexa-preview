<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('fecha_nacimiento');
            $table->string('direccion');
            $table->string('estado');
            $table->string('municipio');
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('sexo');
            $table->string('telefono_celular');
            $table->string('email');
            $table->string('tipo_licencia');
            $table->string('numero_licencia');
            $table->string('rfc');
            $table->string('fecha_ingreso');
            $table->string('fecha_baja');
            $table->string('observaciones');
            $table->tinyInteger('estatus')->default(1);
            
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresa');
            
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
