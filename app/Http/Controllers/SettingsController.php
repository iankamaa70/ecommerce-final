<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		return view('settings.settings')->with('settings',Setting::first());
	}

    public function update(){

    	$this->validate(request(),[

    		'homepage_text1'	=>'required',
			'homepage_text2'	=>'required',
			'homepage_youtube'	=>'required',
			'contact_email'	=>'required',
			'contact_phone'	=>'required',
			'contact_address'	=>'required',
			'fb'	=>'required',
			'twitter'	=>'required',
			'youtube'	=>'required',
			'li'	=>'required',
			'ig'	=>'required',
			'paypal_cmd'	=>'required',
			'paypal_email'	=>'required',
			'paypal_item_name'	=>'required',
			'paypal_text'	=>'required'

    	]);

    	$settings = Setting::first();


    	$settings->homepage_text1 = request()->homepage_text1;
    	$settings->homepage_text2 = request()->homepage_text2;
    	$settings->homepage_youtube = request()->homepage_youtube;
    	$settings->contact_email = request()->contact_email;
    	$settings->contact_phone = request()->contact_phone;
    	$settings->contact_address = request()->contact_address;
    	$settings->fb = request()->fb;
    	$settings->twitter = request()->twitter;
    	$settings->youtube = request()->youtube;
    	$settings->li = request()->li;
    	$settings->ig = request()->ig;
    	$settings->paypal_cmd = request()->paypal_cmd;
    	$settings->paypal_email = request()->paypal_email;
    	$settings->paypal_item_name = request()->paypal_item_name;
    	$settings->paypal_text = request()->paypal_text;	


    	$settings->save();

    	Session::flash('success','Settings updated');

    	return redirect()->back();
    }
}
