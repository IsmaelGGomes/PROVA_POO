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
        Schema::table('chamados', function (Blueprint $table) {
            $table->foreignId('setors_id')->constrained('setors','id')->onDelete('cascade');
            $table->foreignId('situacaos_id')->constrained('situacaos','id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chamados', function (Blueprint $table) {
            $table->foreignId('setors_id')->constrained('setors','id')->onDelete('cascade');
            $table->foreignId('situacaos_id')->constrained('situacaos','id')->onDelete('cascade');
        });
    }
};
