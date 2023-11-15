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
        Schema::create('pedido', function (Blueprint $table){
        $table->string('id_pedido')->primary();

        $table->foreign('id_cliente')
                ->references('id_cliente')
                ->on('cliente');

        $table->foreign('id_produto')
        ->references('id_produto')
        ->on('produto');

        $table->foreign('id_vendedor')
        ->references('id_vendedor')
        ->on('vendedor');

        $table->decimal('valor_total', 5, 2)->nullable()->default(123.45);
        $table->boolean('Status_pedido');
        $table->date('data_pedido')->nullable()->default(now());
        $table->string('valor_entrega');



    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
