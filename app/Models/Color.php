<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Color extends Model
{
    //

    protected $table = 'colors';

    protected $fillable = [
        'name', 'created_at', 'updated_at'
    ];


    public function products()
    {

        return $this->belongsToMany('App\Models\Product', 'color_product', 'color_id', 'product_id');
    }
}
