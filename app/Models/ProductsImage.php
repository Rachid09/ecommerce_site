<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Product;

class ProductsImage extends Model
{
    //

    use Notifiable;
    protected $table = "products_images";
    protected $fillable = [
        'id', 'product_id', 'product_image', 'status', 'created_at', 'updated_at'
    ];



    public function scopeActive($query)
    {

        return $query->where('status', 1);
    }


    public function getProductImageAttribute($val)
    {
        return ($val !== null) ? asset('public/assets/' . $val) : "";
    }



    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
