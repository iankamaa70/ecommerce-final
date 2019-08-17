<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

        	'homepage_text1' =>	"Welcome Home",
			'homepage_text2' =>	"And the king said to the man of God. ",
			'homepage_youtube' => "2R2uNfSqCe4",
			'contact_email' =>	"contact@mail.com",
			'contact_phone'	=>	"8 234 567 8912",
			'contact_address'	=>	"The Potter’s House of North Dallas | 10501 Main Street | Frisco, TX 75035",
			'fb'	=>	"https://www.facebook.com/"	,
			'twitter'	=>	"https://twitter.com/" ,
			'youtube'	=>	"https://www.youtube.com/",
			'li'	=>	"https://www.linkedin.com/",
			'ig'	=>	"https://www.instagram.com/",
			'paypal_cmd'	=>	"donations",
			'paypal_email'	=>	"test@gmail.com",
			'paypal_item_name'	=> 	"Donate/ Give to church",
			'paypal_text'	=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget 					dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, 						nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, 				sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, 					vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo."

        ]);
    }
}
