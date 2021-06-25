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
}
