<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_pessoa');
            $table->string('nome_completo', 50);
            $table->string('email', 80)->unique();
            $table->string('telefone', 20);
            $table->string('cpf', 11)->unique();
            $table->string('logradouro', 30);
            $table->string('cep', 8);
            $table->string('bairro', 50);
            $table->string('estado', 20);
            $table->string('razaoSocial', 50);
            $table->string('cnpj', 14)->unique();
            $table->string('nomeResponsavel', 50);
            $table->string('telefoneResponsavel', 20);
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
        Schema::dropIfExists('app_clientes');
    }
}
