<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function categories()
    {
        return $this->hasOne('App\Category','category_id');
    }

    public function subcat()
    {
        return $this->belongsToMany('App\Subcategory');
    }
}
