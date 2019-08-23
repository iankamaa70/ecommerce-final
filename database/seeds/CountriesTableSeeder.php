<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Country::create(

        	['name' =>	"New Zealand"]
    );
        \App\Country::create(

        	['name' =>	"Australia"]
    );
        \App\Country::create(

        	['name' =>	"United States of America"]
    );
        \App\Country::create(

        	['name' =>	"Samoa"]
    );
    }
}
