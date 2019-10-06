<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'publication_status',


        'name',
        'details',

        'model',
        'price',
        'quantity',
        'minimum_quantity',
        'stock',
        'weight',
        'length',
        'location',

        'image',
        'image1',
        'image2',
        'image3',

        'category_id',
        'subcategory_id',
        'brand_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
