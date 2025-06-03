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
        Schema::create('approbation_demande_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demande_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('approbation_id')->constrained()->onDelete('cascade');
            $table->integer('ordre')->default(1); // Pour l'ordre des approbations
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approbation_demande_type');
    }
};
