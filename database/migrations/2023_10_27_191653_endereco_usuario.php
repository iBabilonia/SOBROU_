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
        Schema::create('endereco_cliente', function (Blueprint $table) {
            $table->foreign('id_cliente')
                ->references('id_usuario')
                ->on('cliente');

            $table->string('rua_cliente');
            $table->integer('numero_cliente')->unique();
            $table->string('cep_cliente')->nullable();
            $table->string('complemento_cliente');
            $table->string('zona_cliente');
            $table->string('bairro');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endereco_cliente');
    }
};
