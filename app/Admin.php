<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasRoles;
    protected $guard = 'auth:admin';
    protected $fillable = [
        'first_name', 'last_name', 'mobile_number', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cases()
    {
        return $this->morphMany('App\Case', 'userable');
    }
}
