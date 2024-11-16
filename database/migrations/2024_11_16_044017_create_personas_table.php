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
        Schema::create('personas', function (Blueprint $table) {
            $table->string('id', 50)->unique();
            $table->string('nombre1', 20);
            $table->string('nombre2', 30)->nullable();
            $table->string('apellido1', 20);
            $table->string('apellido2', 30)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
