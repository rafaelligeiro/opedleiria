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
        Schema::create('doacoes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->enum('tipo_pagamento', ['Cartão', 'MBWay', 'Referência']);
            $table->string('nome');
            $table->dateTime('data');
            $table->text('descricao');
            $table->string('email', 120)->unique();

            $table->unsignedBigInteger('id_utilizador');
            $table->foreign('id_utilizador')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doacoes');
    }
};
