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
        Schema::create('ceps', function (Blueprint $table) {
            $table->id();
            $table->string("bairro")->nullable();
            $table->string("cep")->nullable();
            $table->string("complemento")->nullable();
            $table->string("ddd")->nullable();
            $table->string("gia")->nullable();
            $table->string("ibge")->nullable();
            $table->string("localidade")->nullable();
            $table->string("logradouro")->nullable();
            $table->string("siafi")->nullable();
            $table->string("uf")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ceps');
    }
};
