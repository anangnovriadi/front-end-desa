<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Map;

class MapController extends Controller
{   
    public function __construct() {
        $this->middleware('auth');
    }

    public function update(Request $request) {
        $id = $request->id;
        $map = Map::find($id);
        
        $map->update([
            'embed_url' => $request->embed_url
        ]);
            
        return redirect()->route('map.index');
    }

    public function view() {
        $maps = Map::all();

        return view('admin.maps.index', compact('maps'));
    }
}
