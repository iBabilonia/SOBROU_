<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pedido', function (Blueprint $table) {

            $table->string('cpf_cliente');
            $table->foreign('cpf_cliente')->references('cpf')->on('users');

            $table->string('cnpj_vendedor');
            $table->foreign('cnpj_vendedor')->references('cnpj')->on('users');

            $table->id();
            $table->foreignId('cod_produto')->references('cod_produto')->on('produto');

            $table->integer('preco_pedido');
            $table->integer('quantidade');




        });
    }


    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
