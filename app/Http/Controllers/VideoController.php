<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        return view('prespektif.upload-video');
    }

    public function store(Request $request, Video $video)
    {
        $request->file('name')->move('images/video/', $request->file('name')->getClientOriginalName());
        $video->name = $request->file('name')->getClientOriginalName();
        $video->name = $request->file('name')->getClientOriginalName();
        $videoku = $video->name;    

        $video->create([
            'name'    => $videoku,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('siska.menu');
    }
}
