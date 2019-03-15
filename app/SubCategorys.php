<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategorys extends Model
{
    protected $fillable = [
        'categorys_id','name', 'description','img'
    ];


    public function categorys(){
        return $this->belongsTo('App\Category', 'categorys_id', 'id');
    }

}
