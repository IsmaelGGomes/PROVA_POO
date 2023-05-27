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
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->text('descricao');
            $table->date('prazo_termino');
            /* $table->bigInteger('setor_id')->unsigned();
            $table->bigInteger('situacao_id')->unsigned(); */
           /*  $table->foreign('setor_id')->references('id')->on('setors');
            $table->foreign('situacao_id')->references('id')->on('situacaos'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
};