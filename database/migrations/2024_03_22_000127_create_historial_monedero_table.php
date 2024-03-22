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
        Schema::create('historial_monedero', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_operacion');
            $table->double('monto');
            $table->string('fecha_transaccion', 20);
            $table->string('descripcion', 180);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('aexa_nip_id');
            $table->foreign('aexa_nip_id')->references('id')->on('aexa_nip');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_monedero');
    }
};
