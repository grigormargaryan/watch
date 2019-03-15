<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = [
        'sub_category_id', 'subcategory', 'title', 'description', 'img', 'info','manufacturer','color','manufactur_country','manual','weight','mode_application','	price'
    ];

    public function sub_categories(){
        return $this->belongsTo('App\SubCategory', 'sub_category_id', 'id');
    }

}
