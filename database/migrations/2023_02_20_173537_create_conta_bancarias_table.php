<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('conta_bancaria', function (Blueprint $table) {
            $table->id('conta_bancaria_id');
            $table->string('banco_nome');
            $table->string('agencia_numero');
            $table->string('conta_numero');
            $table->decimal('saldo_inicial');
            $table->timestamps();
            $table->softDeletes();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('conta_bancaria');
    }
};
