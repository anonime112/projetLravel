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
        Schema::create('demande_types', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // ex : "Attestation de Réussite"
            $table->text('description'); // Description textuelle de la demande
            // $table->json('documents_requis'); // JSON encodé
           //  $table->json('personnes_impliquées'); // JSON encodé
            $table->text('regles'); // JSON encodé
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_type');
    }
};
