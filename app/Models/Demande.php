<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Demande extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'users_id',
        'demande_type_id',
        'statut',
        'est_soldee',
        'commentaire',
        'date_emission',
        'etudiant_id',
        'created_at',
        'updated_at',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($demande) {
            $demande->id = (string) Str::uuid();
        });
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function typeDemande()
    {
        return $this->belongsTo(DemandeType::class, 'demande_type_id');
    }

}
