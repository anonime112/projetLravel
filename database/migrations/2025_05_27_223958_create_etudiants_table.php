<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->integer('id', 36)->primary(); // UUID comme clé primaire
            $table->string('nom', 255);
            $table->string('prenom', 255);
            $table->string('email', 255)->unique(); // Email unique
            $table->string('matricule', 100)->unique(); // Matricule unique
            $table->string('niveau', 50);
            $table->boolean('statut_financier');
            $table->date('date_inscription');
            $table->timestamps();

            // Clé étrangère vers la table users
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
