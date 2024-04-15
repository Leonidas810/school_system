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
           Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profesor_id')->constrained('profesores')->onDelete('cascade');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materia_id')->constrained('materia')->onDelete('cascade');
            $table->string('num_grupo');
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade');
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade');
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade')->nullable();
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade')->nullable();
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade')->nullable();
            $table->timestamps();
        });

        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade');
            $table->decimal('parcial1', 2, 2)->nullable();
            $table->decimal('parcial2', 2, 2)->nullable();
            $table->decimal('parcial3', 2, 2)->nullable();
            $table->foreignId('grupo_id')->constrained('grupos')->onDelete('cascade');
            $table->decimal('parcial1', 2, 2)->nullable();
            $table->decimal('parcial2', 2, 2)->nullable();
            $table->decimal('parcial3', 2, 2)->nullable();
            $table->foreignId('grupo_id')->constrained('alumnos')->onDelete('cascade');
            $table->decimal('parcial1', 2, 2)->nullable();
            $table->decimal('parcial2', 2, 2)->nullable();
            $table->decimal('parcial3', 2, 2)->nullable();
            $table->foreignId('grupo_id')->constrained('alumnos')->onDelete('cascade')->nullable();
            $table->decimal('parcial1', 2, 2)->nullable();
            $table->decimal('parcial2', 2, 2)->nullable();
            $table->decimal('parcial3', 2, 2)->nullable();
            $table->foreignId('grupo_id')->constrained('alumnos')->onDelete('cascade')->nullable();
            $table->decimal('parcial1', 2, 2)->nullable();
            $table->decimal('parcial2', 2, 2)->nullable();
            $table->decimal('parcial3', 2, 2)->nullable();
            $table->foreignId('grupo_id')->constrained('alumnos')->onDelete('cascade')->nullable();
            $table->decimal('parcial1', 2, 2)->nullable();
            $table->decimal('parcial2', 2, 2)->nullable();
            $table->decimal('parcial3', 2, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia');
    }
};
