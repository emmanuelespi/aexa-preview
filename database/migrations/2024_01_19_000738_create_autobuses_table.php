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
        Schema::create('autobuses', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('modelo');
            $table->string('catalogo');
            $table->string('numero_serie');
            $table->string('numero_motor');
            $table->string('marca');
            $table->string('placa');
            $table->integer('capacidad');
            $table->integer('numero_economico');
            $table->integer('servicio');
            $table->dateTime('fecha_compra');
            $table->dateTime('fecha_verificacion');
            $table->dateTime('fecha_inicio_seguro');
            $table->dateTime('fecha_fin_seguro');
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresa');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autobuses');
    }
};
