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
        Schema::create('comprobantes_de_pago', function (Blueprint $table) {
            $table->bigIncrements('comprobante_id');
            $table->string('concepto', 255);
            $table->string('descripcion', 255)->nullable();
            $table->string('nComprobante', 255);
            $table->decimal('monto', 8, 2);
            $table->unsignedBigInteger('expediente_id');
            $table->timestamps();

            $table->foreign('expediente_id')->references('expediente_id')->on('expedientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobantes_de_pago');
    }
};
