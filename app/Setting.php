<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['homepage_text1','homepage_text2','homepage_youtube','contact_email','contact_phone','contact_address','fb','twitter','youtube','li','ig','paypal_cmd','paypal_email','paypal_item_name','paypal_text'];
}
