<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Définir la clé primaire
    protected $keyType = 'string'; // UUID comme clé primaire (varchar)
    public $incrementing = false; // Pas d'auto-incrémentation pour UUID

    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'email',
        'matricule',
        'niveau',
        'user_id',
        'statut_financier',
        'date_inscription',
    ];

    protected $casts = [
        'statut_financier' => 'boolean', // Convertir tinyint(1) en booléen
        'date_inscription' => 'date', // Convertir en objet Carbon pour les dates
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
