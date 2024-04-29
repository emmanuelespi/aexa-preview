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
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('clave', 10);
            $table->string('nombre', 80);
            $table->string('razon_social', 80);
            $table->string('rfc', 20);
            $table->string('direccion_fiscal', 150);
            $table->integer('num_exterior')->nullable();
            $table->integer('num_interior')->nullable();
            $table->string('localidad', 100);
            $table->string('colonia', 150);
            $table->string('ciudad', 100);
            $table->string('estado', 50);
            $table->string('pais', 50);
            $table->string('cp', 10);
            $table->string('logo',225);
            $table->string('telefono', 15);
            $table->string('regimen_fiscal', 55);
            $table->string('uso_cfdi', 80);
            $table->tinyInteger('estatus')->default(1);
            $table->softDeletes();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa');
    }
};
