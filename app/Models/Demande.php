<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\User;
class Demande extends Model
{

    protected $table = 'demandes';
    protected $fillable = [
        'users_id',
        'demande_type_id',
        'date_emission',
    ];
    public function type()
{
    return $this->belongsTo(\App\Models\DemandeType::class, 'demande_type_id');
}
public function user()
{
    return $this->belongsTo(User::class,'users_id');
}
}
