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
        Schema::create('libros', function (Blueprint $table) {
            $table->id(); // id auto-incremental
            $table->string('titulo', 255);
            $table->string('autor', 255);
            $table->year('anio_publicacion');
            $table->boolean('disponible')->default(true); // true si está disponible
            $table->timestamps(); // opcional: created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
