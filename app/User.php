<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use Notifiable;
    use HasRoles;
    public function product(){
        return $this->hasMany('App\Product');
    }
    public function sale(){
        return $this->hasMany('App\Sale');
    }
    public function onsale(){
        return $this->hasMany('App\Onsale');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
