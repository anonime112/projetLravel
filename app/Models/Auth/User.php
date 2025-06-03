<?php

namespace App\Models\Auth;

use Lab404\Impersonate\Models\Impersonate;

use Illuminate\Notifications\Notifiable;
use App\Models\Auth\Traits\Scope\UserScope;
use App\Models\Auth\Traits\Method\UserMethod;

use App\Models\Auth\Traits\SendUserPasswordReset;
use App\Models\Auth\Traits\Attribute\UserAttribute;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Auth\Traits\Relationship\UserRelationship;
use Illuminate\Support\Facades\Storage;
use App\Models\RoleUser;


/**
 * Class User.
 */
class User extends Authenticatable
{
    use 
        Notifiable,
        SendUserPasswordReset,
        
        UserAttribute,
        UserMethod,
        UserRelationship,
        UserScope;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['last_login_at', 'deleted_at'];

    /**
     * The dynamic attributes from mutators that should be returned with the user object.
     * @var array
     */
    protected $fillable = [
        'name',
    
        'email',
        'avatar_type',
        'avatar_location',
        'password',
        'password_changed_at',
        'active',
        'confirmation_code',
        'confirmed',
        'timezone',
        'last_login_at',
        'last_login_ip',
    ];


    public function roleUser()
{
    return $this->hasOne(RoleUser::class);
}

    /**
     * The dynamic attributes from mutators that should be returned with the user object.
     * @var array
     */
    public function getAvtar(){
        return "https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&d=mm&r=g";
    }
}
