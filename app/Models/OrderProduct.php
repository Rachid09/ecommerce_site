<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    //

    protected $table = 'order_product';

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'product_qty',
        'price',
        'delivered_at',
        'created_at',
        'updated_at'
    ];


    public function scopeSelection($query)
    {

        return $query->select(
            'id',
            'order_id',
            'product_id',
            'product_qty',
            'price',
            'delivered_at',
            'created_at',
            'updated_at'
        );
    }
}
