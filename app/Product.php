<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','image','category_id','description'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }


}
