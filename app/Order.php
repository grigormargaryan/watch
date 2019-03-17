<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\App;

class Order extends Model
{
    protected $fillable = ['name','phone','address','description'];

}
