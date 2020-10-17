<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motivations;
use App\Models\Photo;
use App\Models\Video;
use App\Models\News;
use App\Models\Infograph;

class PrespektifController extends Controller
{
    
    public function index()
    {
        $dataMotivation = Motivations::orderBy('id', 'DESC')->first();
        $dataGambar = Photo::take(3)->orderBy('id', 'DESC')->get();
        $dataVideo = Video::orderBy('id', 'DESC')->first();
        $dataNews = News::take(3)->orderBy('id', 'DESC')->get();
        $dataInfograph = Infograph::orderBy('id', 'DESC')->first();
        // dd($dataInfograph);
        return view('prespektif.prespektif', compact(['dataMotivation','dataGambar','dataVideo','dataNews','dataInfograph']));
    }
    public function menu()
    {
        return view('prespektif.menu-upload');
    }
}
