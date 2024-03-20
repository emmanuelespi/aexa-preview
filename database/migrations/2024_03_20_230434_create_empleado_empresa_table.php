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
        Schema::create('empleado_empresa', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            
            $table->unsignedBigInteger('empleados_id');
            $table->foreign('empleados_id')->references('id')->on('empleados');
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_empresa');
    }
};
