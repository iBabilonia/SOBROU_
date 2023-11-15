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
        Schema::create('endereco_pedido', function (Blueprint $table) {
            $table->foreign('id_vendedor')
                ->references('id_vendedor')
                ->on('vendedor');

            $table->foreign('id_cliente')
                ->references('id_cliente')
                ->on('cliente');



            $table->string('rua_pedido');
            $table->integer('numero_pedido')->unique();
            $table->string('cep_pedido')->nullable();
            $table->string('complemento_pedido');
            $table->string('zona_pedido');
            $table->string('bairro_pedido');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endereco_pedido');
    }
};
