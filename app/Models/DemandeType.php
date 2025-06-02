<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeType extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'regles',
        'created_at',
        'updated_at',
    ];

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
}
