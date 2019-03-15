<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['category_id','sub_categorys_id','brand_id','color_id','belt_id','name','description','price','quantity'];

    public function projectsImg()
    {
        return $this->hasMany('App\ProductsImages');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function belt()
    {
        return $this->belongsTo(Belt::class);
    }

}
