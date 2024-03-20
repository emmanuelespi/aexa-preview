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
            $table->string('numero_serie');
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa');
            $table->string('anio_fabricacion');
            $table->string('capacidad_pasajeros');
            $table->string('num_economico');
            $table->string('fecha_compra');
            $table->string('fecha_verificacion');
            $table->string('fecha_inicio_seguro');
            $table->string('fecha_fin_seguro');
            $table->string('estatus');
            $table->string('observaciones');
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
        Schema::dropIfExists('autobuses');
    }
};
