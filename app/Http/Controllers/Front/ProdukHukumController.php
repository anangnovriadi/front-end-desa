<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Content;
use App\Model\Map;

class ProdukHukumController extends Controller
{
    public function view() {
        $contents = Content::all();
        $maps = Map::all();

        return view('produk-hukum', compact(['contents', 'maps']));
    }
}
