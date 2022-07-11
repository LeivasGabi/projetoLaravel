<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
           
            $table->increments("id_pedido")->unique();
            $table->double("valorFrete");
            $table->timestamps("dataEntrega");
            $table->integer("cpf")->unique(); // a ideia era transformar o cpf em chave estrangeira mas não deu certo
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
