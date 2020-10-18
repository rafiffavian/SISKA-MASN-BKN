<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuslitbangController extends Controller
{
    public function index()
    {
        return view('puslitbang.puslit');
    }
}
