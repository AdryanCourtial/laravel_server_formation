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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('secteur_activite_id')->nullable();
            $table->foreign('secteur_activite_id')->references('id')->on('secteurs_activites')->onDelete('set null')->onUpdate('cascade');
            $table->integer('code_postal');
            $table->string('ville');
            $table->integer('chiffres_affaires');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
