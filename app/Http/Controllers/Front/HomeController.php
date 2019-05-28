<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Content;
use App\Model\Map;

class HomeController extends Controller
{
    public function view() {
        $contents = Content::all();
        $maps = Map::all();

        return view('home', compact(['contents', 'maps']));
    }

    // public function maps() {
    //     $maps = Map::all();
        
    //     return view('home', compact('maps'));
    // }
}
