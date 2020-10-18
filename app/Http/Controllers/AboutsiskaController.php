<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutsiskaController extends Controller
{
    public function index()
    {
        return view('about.tentang-siska')->with('success', 'true');
    }
}
