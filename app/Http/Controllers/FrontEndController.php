<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
Use App\Category;
use App\Event;
use App\Report;
use App\Video;

class FrontEndController extends Controller
{

    public function welcome()
    {
        $events = Event::all();
        $reports = Report::orderBy('created_at','desc')->take(3)->get();

        return view('welcome')->withEvents($events)
                              ->withReports($reports);
    }


    public function index()
    {
    	$categories = Category::all();

    	return view('shop', ['products' => Product::paginate(8)])->withCategories($categories);
    }

    public function singleProduct($id)
    {
    	$categories = Category::orderBy('created_at','desc')->get();
    	return view ('single', ['product' => Product::find($id)])->withCategories($categories);
    }

    public function filter_categories($id){

            $current_module=Category::find($id);


           $categories = Category::all();

           $products=Category::find($id)->products()->paginate(8);


           return view("shop",compact('categories','products','current_module'));
    }

    public function eventall(){

        $events = Event::all();

        return view('event')->withEvents($events);

    }
    public function event($id){

        $events = Event::orderBy('created_at','desc')->get();
        return view ('eventsingle', ['event' => Event::find($id)])->withEvents($events);
    }

    public function reportall(){

        $reports = Report::all();

        return view('report')->withReports($reports);

    }

    public function report($id){

        $reports = Report::orderBy('created_at','desc')->get();
        return view ('reportsingle', ['report' => Report::find($id)])->withReports($reports);
    }

    public function video(){

        $videos = Video::orderBy('created_at','desc')->take(1)->get();
        $vidas = Video::orderBy('created_at','desc')->get();
        return view ('video')->withVideos($videos)->withVidas($vidas);
    }

    public function svideo($id){

        $video=Video::find($id);
        $vidas = Video::orderBy('created_at','desc')->get();
        return view("video2",compact('video','vidas'));


    }

}
