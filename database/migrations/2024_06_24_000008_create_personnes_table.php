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
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('civilite_id')->nullable(false);
            $table->foreign('civilite_id')->references('id')->on('civilites')->onUpdate('cascade');
            $table->string('nom', length: 15);
            $table->string('prenom', length: 15);
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->unsignedBigInteger('localisation_id')->nullable();
            $table->foreign('localisation_id')->references('id')->on('localisations')->onDelete('set null')->onUpdate('cascade');
            // $table->foreignId('entreprise_id')
            //                                     ->constrained()
            //                                     ->onDelete('cascade')
            //                                     ->onUpdate('cascade')
            //                                d     ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
