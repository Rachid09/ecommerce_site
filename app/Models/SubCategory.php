<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //

    protected $table = 'sub_categories';

    protected $fillable = [
        'parent_id', 'maincategory_id', 'name', 'photo', 'discount', 'description', 'meta_title', 'meta_description', 'meta_keywords', 'url', 'status', 'created_at', 'updated_at'
    ];


    public function scopeSelection($query)
    {

        return $query->select('id', 'parent_id', 'maincategory_id', 'name', 'photo', 'discount', 'description', 'meta_title', 'meta_description', 'meta_keywords', 'url', 'status');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('public/assets/' . $val) : "";
    }


    public function getActive()
    {
        return $this->status == 1 ? 'مفعل' : 'غير مفعل';
    }



    public  function mainCategory()
    {
        return $this->belongsTo(MainCategory::class, 'maincategory_id', 'id');
    }

    // public function subcategories()
    // {
    //     return $this->hasMany(SubCategory::class, 'parent_id');
    // }

    // public function parentSubCategory()
    // {
    //     return $this->belongsTo(SubCategory::class, 'parent_id')->selection();
    // }
}
