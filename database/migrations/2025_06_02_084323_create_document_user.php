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
        Schema::create('document_user', function (Blueprint $table) {
            $table->id();
            
            // L'utilisateur qui fournit le document
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
    
        
            // Le type de document requis
            $table->foreignId('document_requis_id')->constrained('document_requis')->onDelete('cascade');
        
            // La valeur soumise : lien fichier, texte ou autre
            $table->text('valeur');
        
 
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_user');
    }
};
