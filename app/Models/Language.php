<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //



    protected $table = 'languages';

    protected $fillable = [
        'abbr', 'locale', 'nom', 'direction', 'is_active', 'created_at', 'updated_at',
    ];


    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    public function scopeSelection($query)
    {
        return $query->select('id', 'abbr', 'locale', 'nom', 'direction', 'is_active');
    }

    public function getIsActive()
    {
        return $this->is_active == 1 ? 'مفعل ' : 'غير مفعل ';
    }
}
