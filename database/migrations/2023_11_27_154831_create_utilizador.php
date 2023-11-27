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
        Schema::create('utilizador', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('apelido');
            $table->dateTime('data_nasc');
            $table->enum('genero',['Masculino','Feminino'])->default('Masculino');
            $table->text('morada');
            $table->string('cod_postal',8);
            $table->integer('nif',9);
            $table->integer('telefone', 9);
            $table->string('email', 120)->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilizador');
    }
};
