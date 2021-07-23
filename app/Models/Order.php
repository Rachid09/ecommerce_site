<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = [
        'id',
        'user_id',
        'user_name',
        'address',
        'city',
        'country',
        'phone',
        'email',
        'order_status',
        'payment_method',
        'payment_gateway',
        'grand_total',
        'created_at', 'updated_at'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')->withPivot('product_qty', 'price');
    }



    public function scopeSelection($query)
    {

        return $query->select(
            'id',
            'user_id',
            'user_name',
            'address',
            'city',
            'country',
            'phone',
            'email',
            'order_status',
            'payment_method',
            'payment_gateway',
            'grand_total',
            'created_at',
            'updated_at'
        );
    }
}
