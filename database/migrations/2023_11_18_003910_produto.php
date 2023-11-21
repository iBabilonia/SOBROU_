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
        Schema::create('produto', function (Blueprint $table) {

            $table->string('cnpj_vendedor');
            $table->foreign('cnpj_vendedor')->references('cnpj')->on('users');

            $table->string('nome');
            $table->string('imagem_produto');
            $table->date('data_fabricacao');
            $table->date('data_validade');
            $table->decimal('preco_produto');
            $table->decimal('peso_produto');
            $table->string('tipo');
            $table->text('descricao');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
