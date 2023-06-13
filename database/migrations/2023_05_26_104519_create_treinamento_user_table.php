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
        Schema::create('treinamento_user', function (Blueprint $table) {
            $table->foreignId('treinamento_id');
            $table->foreignId('user_id');
            $table->integer("nota")->default('-1');
            $table->integer("nota1")->default('-1');
            $table->integer("nota2")->default('-1');
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
        Schema::dropIfExists('treinamento_user');
    }
};
