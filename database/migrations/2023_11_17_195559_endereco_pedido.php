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
        Schema::create('endereco_produto', function (Blueprint $table) {

            $table->foreign('cnpj')->references()->on('users');
            $table->string('cpf');

            $table->string('rua');
            $table->string('numero');
            $table->string('complemento');
            $table->string('estado');
            $table->string('cidade');
            $table->string('zona');
            $table->string('tipo');
            $table->string('cep');
            $table->string('bairro');





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endereco_produto');
    }
};
