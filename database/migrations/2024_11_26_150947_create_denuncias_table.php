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
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();
            $table->string('canal');
            $table->date('fecha_recepcion');
            $table->year('anio_ingreso');
            $table->string('entidad_sujeta_control');
            $table->string('ambito_geografico');
            $table->string('provincia');
            $table->string('distrito');
            $table->tinyInteger('estado')->default(1);
            $table->enum('denun_estado', ['En proceso', 'No admitido', 'Admitido', 'Derivado a OCI'])->default('En proceso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncias');
    }
};
