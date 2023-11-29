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
            $table->dateTime('data_nasc')->nullable();
            $table->enum('genero',['M','F'])->default('M');
            $table->text('morada')->nullable();
            $table->string('cod_postal',8)->nullable();
            $table->bigInteger('nif')->nullable();
            $table->bigInteger('telefone')->nullable();
            $table->string('photo', 100)->nullable();
            $table->enum('role', ['A','F','M'])->default('M');
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
