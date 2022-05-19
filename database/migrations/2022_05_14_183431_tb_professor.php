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
        Schema::create('tb_professors', function (Blueprint $table) {
            $table->increments("id_professor");
            $table->string("nomeP");
            $table->string("cpf");
            $table->integer("turma")->unsigned();
            $table->foreign("turma")->references("id_turma")->on("tb_turmas");
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
        Schema::dropIfExists('tb_professors');
    }
};
