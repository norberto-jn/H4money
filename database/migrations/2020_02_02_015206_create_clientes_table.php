<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nome',70);
            $table->string('endereco',50);
            $table->string('numero',10);
            $table->string('bairro',30);
            $table->string('cidade',45);
            $table->char('uf',2);
            $table->string('cep',9);
            $table->string('email',70);
            $table->string('cpf',14);
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
        Schema::dropIfExists('clientes');
    }
}
