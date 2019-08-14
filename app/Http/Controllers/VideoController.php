<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Session;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
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
        return view('videos.index',['videos'=>video::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
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
            'description' => 'required',
            'image' => 'required|image',
            'video' => 'required|mimes:mp4,mov,ogg,qt,ts'
        ]);

        $video = new video;

        $video_image = $request->image;

        $video_image_new_name = time() . $video_image->getClientOriginalName();

        $video_image->move('uploads/videos', $video_image_new_name);


        $videofile = $request->file('video');
        $videoName = time().'.'.request()->video->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/videos');
        $videoPath = '/uploads/videos/'.$videoName;
        $videofile->move($destinationPath, $videoName);


        $video->video=$videoPath;
        $video->name = $request->name;
        $video->description = $request->description;
        $video->video = $videoPath;
        $video->image = 'uploads/videos/' . $video_image_new_name;

        $video->save();

        Session::flash('success', 'Video saved.');

        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);
        return view('videos.edit')->with('video',$video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'video' => 'required|mimes:mp4,mov,ogg,qt,ts'
        ]);

        $video = Video::find($id);
        $video_image = $request->image;
        $video_image_new_name = time() . $video_image->getClientOriginalName();
        $video_image->move('uploads/videos', $video_image_new_name);


        $videofile = $request->file('video');
        $videoName = time().'.'.request()->video->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/videos');
        $videoPath = '/uploads/videos/'.$videoName;
        $videofile->move($destinationPath, $videoName);


        $video->video=$videoPath;
        $video->name = $request->name;
        $video->description = $request->description;
        $video->video = $request->video;
        $video->image = 'uploads/videos/' . $video_image_new_name;

        $video->save();

        Session::flash('success', 'Video saved.');

        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        if(file_exists($video->video))
        {
            unlink($video->video);
        }

        if(file_exists($video->image))
        {
            unlink($video->image);
        }

        $video->delete();


        Session::flash('success','The video was just deleted');


        return redirect()->back();
    }
}
