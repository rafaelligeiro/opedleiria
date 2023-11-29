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
        Schema::table('users', function (Blueprint $table) {
            $table->dateTime('data_nasc');
            $table->enum('genero',['Masculino','Feminino'])->default('Masculino');
            $table->text('morada');
            $table->string('cod_postal',8);
            $table->bigInteger('nif');
            $table->bigInteger('telefone');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('data_nasc');
            $table->dropColumn('genero');
            $table->dropColumn('morada');
            $table->dropColumn('cod_postal');
            $table->dropColumn('nif');
            $table->dropColumn('telefone');
            $table->dropSoftDeletes();
        });
    }
};
