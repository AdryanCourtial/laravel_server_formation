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
        Schema::create('secteurs_activites', function (Blueprint $table) {
            $table->id();
            $table->string('secteur_activite');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('personnes', function (Blueprint $table) {
        //     $table->dropForeign(['secteur_activite_id']);
        // });
        Schema::dropIfExists('secteurs_activites');
    }
};
