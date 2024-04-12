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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->double('total');
            $table->double('descuento');
            $table->double('aexa_nip_puntos_generados');
            $table->string('fecha_venta', 30);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('diario_c_id');
            $table->foreign('diario_c_id')->references('id')->on('diario_c');
            $table->unsignedBigInteger('empleado_id');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->unsignedBigInteger('taquilla_id');
            $table->foreign('taquilla_id')->references('id')->on('taquilla');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
