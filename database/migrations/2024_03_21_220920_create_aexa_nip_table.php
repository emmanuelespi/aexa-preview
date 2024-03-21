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
        Schema::create('aexa_nip', function (Blueprint $table) {
            $table->id();
            $table->integer('num_monedero');
            $table->double('saldo_total');
            $table->string('fecha_ultima_transaccion');
            $table->enum('estado_mondero',['activo','inactivo','bloqueado','cerrado','suspendido']);
            $table->string('observaciones',200);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aexa_nip');
    }
};
