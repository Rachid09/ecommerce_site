<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    use Notifiable;

    protected $table = 'sellers';
    protected $guard = 'seller';

    protected $fillable = [
        'full_name', 'store_name', 'mobile', 'address', 'email',  'password',  'active',
        'logo', 'created_at', 'updated_at'
    ];

    protected $hidden = ['password', 'remember_token'];


    public function scopeActive($query)
    {

        return $query->where('active', 1);
    }

    public function getLogoAttribute($val)
    {
        return ($val !== null) ? asset('public/assets/' . $val) : "";
    }


    public function scopeSelection($query)
    {
        return $query->select(
            'id',
            'full_name',
            'store_name',
            'mobile',
            'address',
            'email',
            'password',
            'active',
            'logo'
        );
    }


    public function maincategory()
    {

        return $this->belongsToMany('App\Models\MainCategory', 'maincategory_seller', 'seller_id', 'maincategory_id');
    }

    public function getActive()
    {
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';
    }


    // public function setPasswordAttribute($password)
    // {
    //     if (!empty($password)) {
    //         $this->attributes['password'] = bcrypt($password);
    //     }
    // }
}
