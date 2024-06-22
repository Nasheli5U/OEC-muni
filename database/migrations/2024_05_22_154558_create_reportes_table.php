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
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('id'); // Cambiado a 'id' por convención de Laravel
            $table->unsignedBigInteger('expediente_id');
            $table->bigInteger('tipo_reporte');
            $table->timestamps();

            $table->foreign('expediente_id')->references('id')->on('expedientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
