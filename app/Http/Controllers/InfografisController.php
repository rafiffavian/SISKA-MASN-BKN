<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infograph;

class InfografisController extends Controller
{
    public function index()
    {
        return view('prespektif.upload-infografis');
    }

    public function store(Request $request, Infograph $infograph)
    {
        $request->file('photo')->move('images/infograph/', $request->file('photo')->getClientOriginalName());
        $infograph->photo = $request->file('photo')->getClientOriginalName();
        $infograph->photo = $request->file('photo')->getClientOriginalName();
        $foto = $infograph->photo;    

        $infograph->create([
            'photo'    => $foto,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('siska.menu');
    }
}
