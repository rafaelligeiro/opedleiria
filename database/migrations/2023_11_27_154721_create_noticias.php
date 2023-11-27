<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->enum('categoria', ['Desporto', 'Social', 'Eventos', 'Comunidade', 'Novidades', 'Histórias']);
            $table->string('descricao');
            $table->dateTime('data');

            $table->unsignedBigInteger('id_func');
            $table->foreign('id_func')->references('id')->on('funcionario');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
