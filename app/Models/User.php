<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //

    use Notifiable;

    protected $table = 'users';
    protected $guard = 'web';

    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'password', 'adresse', 'email_verified_at', 'created_at', 'updated_at'
    ];

    protected $hidden = ['password', 'remember_token'];




    public function scopeSelection($query)
    {
        return $query->select(
            'id',
            'first_name',
            'last_name',
            'phone',
            'email',
            'password',
            'adresse',
            'created_at',
            'updated_at'
        );
    }


    
}
