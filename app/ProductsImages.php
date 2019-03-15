<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsImages extends Model
{
    protected $fillable = ['products_id', 'filename'];

    public function projects()
    {
        return $this->belongsTo('App\Products');
    }
}