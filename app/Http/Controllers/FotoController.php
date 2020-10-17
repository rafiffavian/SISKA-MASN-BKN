<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class FotoController extends Controller
{
    public function index()
    {
        return view('prespektif.upload-foto');
    }

    public function store(Request $request, Photo $photo)
    {
        $request->file('name')->move('images/foto/', $request->file('name')->getClientOriginalName());
        $photo->name = $request->file('name')->getClientOriginalName();
        $photo->name = $request->file('name')->getClientOriginalName();
        $foto = $photo->name;    

        $photo->create([
            'name'    => $foto,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('siska.menu');
    }
}
