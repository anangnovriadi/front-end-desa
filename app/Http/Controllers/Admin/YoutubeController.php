<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Youtube;

class YoutubeController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
    
    public function update(Request $request) {
        $id = $request->id;
        $youtube = Youtube::find($id);
        
        $youtube->update([
            'embed_url' => $request->embed_url
        ]);
            
        return redirect()->route('youtube.index');
    }

    public function view() {
        $youtubes = Youtube::all();

        return view('admin.youtube.index', compact('youtubes'));
    }
}
