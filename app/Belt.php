<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\App;

class Belt extends Model
{
    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Products::class);
    }

}
