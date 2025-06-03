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
        Schema::create('approbations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('role'); // libellé du rôle (non utilisé pour la logique, juste informatif)
            $table->text('description');
            $table->string('statut')->default('non_approuve'); 
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade'); // celui qui doit approuver
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approbation');
    }
};
