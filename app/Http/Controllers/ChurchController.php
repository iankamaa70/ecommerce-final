<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Church;
use Session;

class ChurchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('churches.index',['churches'=>church::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();

        return view('churches.create')->withCountries($countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'country_id' => 'required',
            'url' => 'required'
        ]);

        $church = new Church;

        $church->name = $request->name;
        $church->country_id = $request->country_id;
        $church->url = $request->url;

        $church->save();

        Session::flash('success', 'Church added.');

        return redirect()->route('churches.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $church = Church::find($id);
        $countries = Country::all();

        return view('churches.edit',compact('church','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'country_id' => 'required',
            'url' => 'required'
        ]);

        $church = Church::find($id);

        $church->name = $request->name;
        $church->country_id = $request->country_id;
        $church->url = $request->url;

        $church->save();

        Session::flash('success', 'Church updated.');

        return redirect()->route('churches.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $church = Church::find($id);

       

        $church->delete();


        Session::flash('success','The church was just deleted');


        return redirect()->back();
    }
}
