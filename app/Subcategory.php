<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'category_name',
       /* 'publication_status'*/
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
