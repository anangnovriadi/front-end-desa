<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Content;
use App\Model\Map;
use App\Model\Youtube;
use App\Model\Potensi;
use App\Model\Perangkat;

class HomeController extends Controller
{
    public function view() {
        $contents = Content::all();
        $maps = Map::all();
        $youtubes = Youtube::all();
        $potensis = Potensi::all();
        $perangkats = Perangkat::where('status_kepala', 0)->get();
        $kepala = Perangkat::where('status_kepala', 1)->get();

        return view('home', compact(['contents', 'maps', 'youtubes', 'potensis', 'perangkats', 'kepala']));
    }
}
