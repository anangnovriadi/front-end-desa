<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Content;
use App\Model\Map;
use App\Model\Youtube;
use App\Model\Potensi;

class HomeController extends Controller
{
    public function view() {
        $contents = Content::all();
        $maps = Map::all();
        $youtubes = Youtube::all();
        $potensis = Potensi::all();

        return view('home', compact(['contents', 'maps', 'youtubes', 'potensis']));
    }
}
