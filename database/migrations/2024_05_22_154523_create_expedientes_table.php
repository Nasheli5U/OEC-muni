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
            $table->bigIncrements('expediente_id');
            $table->string('apellidos', 255);
            $table->string('nombres', 255);
            $table->integer('nExpediente');
            $table->date('fechaNot');
            $table->string('estado', 255);
            $table->text('comprobante')->nullable();
            $table->string('imagen', 255)->nullable();
            $table->decimal('precio', 8, 2);
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
