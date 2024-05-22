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
        Schema::create('estados', function (Blueprint $table) {
            $table->bigIncrements('estado_expediente_id');
            $table->unsignedBigInteger('expediente_id');
            $table->string('estado', 255);
            $table->timestamps();

            $table->foreign('expediente_id')->references('expediente_id')->on('expedientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
