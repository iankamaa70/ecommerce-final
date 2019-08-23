<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $fillable = ['name','url','country_id',];

    public function category()
    {
        return $this->belongsTo('App\Country');
    }
}
