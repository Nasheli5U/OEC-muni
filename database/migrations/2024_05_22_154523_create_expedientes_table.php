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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id('expediente_id');
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('dni_ruc');
            $table->string('direccion_predio');
            $table->string('domicilio');
            $table->string('procedencia');
            $table->date('fecha');
            $table->string('infraccion');
            $table->decimal('monto', 10, 2);
            $table->string('resolucion')->nullable();
            $table->string('medida_complementaria')->nullable();
            $table->string('estado')->default('REC'); // Estado inicial
            $table->string('numero_expediente')->unique();
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
