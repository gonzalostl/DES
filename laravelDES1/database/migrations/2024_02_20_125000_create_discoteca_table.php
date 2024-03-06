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
        Schema::create('discoteca', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->integer('capacidad');
            $table->integer('precio');
            //campo para la clave externa
            $table->unsignedBigInteger('gerente_id');
            //definicióon de la clave externa
            $table->foreign('gerente_id')->references('id')->on('gerente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discoteca');
    }
};
