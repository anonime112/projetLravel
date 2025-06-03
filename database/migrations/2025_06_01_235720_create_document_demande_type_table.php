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
        Schema::create('document_demande_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_requis_id')->constrained('document_requis')->onDelete('cascade');
            $table->foreignId('demande_types_id')->constrained('demande_types')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_demande_type');
    }
};
