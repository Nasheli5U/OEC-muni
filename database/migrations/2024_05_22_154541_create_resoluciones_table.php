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
        Schema::create('resoluciones', function (Blueprint $table) {
            $table->bigIncrements('resolucion_id');
            $table->unsignedBigInteger('expediente_id');
            $table->bigInteger('tipo_expediente');
            $table->timestamps();

            $table->foreign('expediente_id')->references('expediente_id')->on('expedientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resoluciones');
    }
};
