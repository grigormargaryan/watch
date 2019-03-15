<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\App;

class Category extends Model
{
    protected $fillable = ['name','title'];

    public function product()
    {
        return $this->hasMany(Products::class);
    }

}
