<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    //

    use Notifiable;

    protected $table = 'users';
    protected $guard = 'web';

    protected $fillable = [
        'name', 'email', 'password', 'email', 'email_verified_at', 'created_at', 'updated_at'
    ];

    protected $hidden = ['password', 'remember_token'];
}
