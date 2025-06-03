<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Demande;

class DemandeType extends Model
{
    
    protected $table = 'demande_types';

    protected $fillable = [
        'nom',
        'description',
        'regles',
    ];

    public function demandes()
{
    return $this->hasMany(Demande::class, 'demande_type_id');
}
}
