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
        Schema::create('tb_turmas', function (Blueprint $table) {
            $table->increments("id_turma");
            $table->string("nomeT");
            $table->string("status");
            $table->integer("escola")->unsigned();
            $table->foreign("escola")->references("id_escola")->on("tb_escolas");
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
        Schema::dropIfExists('tb_turma');
    }
};
