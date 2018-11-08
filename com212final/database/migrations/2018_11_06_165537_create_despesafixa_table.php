<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespesafixaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesafixa', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nome');
            $table->date("data");
            $table->string("pagoa");
            $table->string("valor");
            $table->string("categoria");
            $table->string("pagamento");
            $table->string("situacao");
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
        Schema::dropIfExists('despesafixa');
    }
}
