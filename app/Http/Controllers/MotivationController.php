<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motivations;

class MotivationController extends Controller
{
    public function index()
    {
        return view('prespektif.upload-motivation');
    }

    public function store(Request $request, Motivations $motivations)
    {
       
        $motivations->create([
            'title'      => $request->title,
            'content'    => $request->content,
            'user_id'    => auth()->user()->id,
        ]);

        return redirect()->route('siska.menu');
    }

}
