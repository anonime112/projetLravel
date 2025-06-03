<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\approbations;

use App\Models\DocumentDemandeType;
class ApprobationDemandeType extends Model
{
    protected $table = 'approbation_demande_type';

    protected $fillable = [
        'demande_type_id',
        'approbation_id',
        'ordre',
    ];
    public function approbation()
{
    return $this->belongsTo(approbations::class, 'approbation_id');
}
public function demandeType()
{
    return $this->belongsTo(DemandeType::class, 'demande_type_id');
}
}
