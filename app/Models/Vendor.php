<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vendor extends Model
{
    use Notifiable;

    protected $table = 'vendors';

    protected $fillable = [
        'full_name', 'store_name', 'mobile', 'address', 'email',  'password',  'active',
        'logo', 'created_at', 'updated_at'
    ];

    protected $hidden = ['categories', 'password'];


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

        return $this->belongsToMany('App\Models\MainCategory', 'maincategory_vendor', 'vendor_id', 'maincategory_id');
    }

    public function getActive()
    {
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';
    }


    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }
}
