<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('produto', function (Blueprint $table) {

            $table->string('cpf_cliente');
            $table->foreign('cpf_cliente')->references('cpf')->on('users');

            $table->string('cnpj_vendedor');
            $table->foreign('cnpj_vendedor')->references('cnpj')->on('users');


            $table->id('cod_produto');
            $table->integer('quantidade');
            $table->text('descricao');
            $table->decimal('peso');
            $table->string('categoria');
            $table->decimal('integger');
            $table->string('tipo');
            $table->date('data_validade');
            $table->date('data_fabricacao');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
