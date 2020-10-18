<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KajianController extends Controller
{
    public function index()
    {
        return view('kajian.kajian');
    }

    public function kajian()
    {
        return view('kajian.e-kajian');
    }
}
