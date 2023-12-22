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
            $table->clave();
            $table->nombre();
            $table->razon_social();
            $table->rfc();
            $table->direccion_fiscal();
            $table->num_exterior();
            $table->num_interior();
            $table->localidad();
            $table->colonia();
            $table->ciudad();
            $table->estado();
            $table->pais();
            $table->cp();
            $table->telefono();
            $table->estatus();
            $table->timestamps();
            $table->softDeletes();
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
