<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('conta_pagar', function (Blueprint $table) {
            $table->id('conta_pagar_id');
            $table->unsignedBigInteger('fornecedor_id');
            $table->foreign('fornecedor_id')->references('fornecedor_id')->on('fornecedor');
            $table->string('descricao');
            $table->decimal('valor');
            $table->timestamp('paga_em')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('conta_pagar');
    }
};
