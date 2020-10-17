<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('prespektif.upload-news');
    }

    public function store(Request $request, News $news)
    {
        $request->file('photo')->move('images/news/', $request->file('photo')->getClientOriginalName());
        $news->photo = $request->file('photo')->getClientOriginalName();
        $news->photo = $request->file('photo')->getClientOriginalName();
        $foto = $news->photo;    

        $news->create([
            'title'    => $request->title,
            'content'    => $request->content,
            'user_id' => auth()->user()->id,
            'photo'    => $foto,
        ]);

        return redirect()->route('siska.menu');
    }
}
