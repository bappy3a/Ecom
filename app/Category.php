<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'publication_status',
    ];
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function posts()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }







}
