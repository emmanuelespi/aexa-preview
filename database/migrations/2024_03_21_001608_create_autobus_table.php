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
        Schema::create('autobus', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 25);
            $table->string('numero_serie', 30);
            $table->string('marca', 40);
            $table->string('modelo', 35);
            $table->string('placa', 10);
            $table->string('anio_fabricacion', 15);
            $table->integer('capacidad_pasajeros');
            $table->integer('num_economico');
            $table->string('fecha_compra'. 20);
            $table->string('fecha_verificacion', 20);
            $table->string('fecha_inicio_seguro', 20);
            $table->string('fecha_fin_seguro', 20);
            $table->tinyInteger('estatus')->default(1);
            $table->string('observaciones', 200);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marca');
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autobus');
    }
};
