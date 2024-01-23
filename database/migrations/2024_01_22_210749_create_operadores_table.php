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
        Schema::create('operadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo', 100);
            $table->string('fecha_nacimiento');
            $table->string('direccion', 150);
            $table->string('estado', 50);
            $table->string('municipio', 200);
            $table->string('colonia', 150);
            $table->string('codigo_postal', 20);
            $table->string('estado_civil', 50);
            $table->string('sexo', 30);
            $table->string('telefono_celular', 15);
            $table->string('email');
            $table->string('tipo_licencia', 10);
            $table->string('numero_licencia', 35);
            $table->string('rfc', 20);
            $table->string('fecha_ingreso');
            $table->string('fecha_baja');
            $table->tinyInteger('estatus')->default(1);
            $table->string('observaciones', 200);
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresa');
            $table->unsignedBigInteger('id_autobus');
            $table->foreign('id_autobus')->references('id')->on('autobuses');
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
        Schema::dropIfExists('operadores');
    }
};
