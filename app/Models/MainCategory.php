<?php

namespace App\Models;

use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;

class MainCategory extends Model
{
    protected $table = 'main_categories';

    protected $fillable = [
        'translation_lang', 'translation_of', 'libelle', 'slug', 'photo', 'is_active', 'created_at', 'updated_at'
    ];

    // protected static function boot()
    // {
    //     parent::boot();
    //     MainCategory::observe(MainCategoryObserver::class);
    // }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('id', 'translation_lang', 'libelle', 'slug', 'photo', 'is_active', 'translation_of');
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('public/assets/' . $val) : "";
    }

    public function getIsActive()
    {
        return $this->is_active == 1 ? 'مفعل' : 'غير مفعل';
    }

    public function scopeDefaultCategory($query)
    {
        return  $query->where('translation_of', 0);
    }


    // get all translation categories
    public function products()
    {
        return $this->hasMany(Product::class, 'maincategory_id', 'id');
    }


    public  function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'maincategory_id', 'id');
    }



    public function sellers()
    {

        return $this->belongsToMany('App\Models\Seller', 'maincategory_seller', 'maincategory_id', 'seller_id');
    }
}
