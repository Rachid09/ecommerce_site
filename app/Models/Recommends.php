<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;

class Recommends extends Model
{
    //

    protected $table = 'recommends';


    protected $fillable = [
        'id', 'user_id', 'product_id',  'created_at', 'updated_at'
    ];


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
