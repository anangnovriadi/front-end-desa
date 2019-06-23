<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Content;

class ContentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function view() {
        $contents = Content::all();

        return view('admin.content.index', compact('contents'));
    }

    public function edit(Request $request, $id) {
        $contents = Content::find($id);

        return view('admin.content.edit', compact('contents'));
    }

    public function update(Request $request, $id) {
        $request_all = $request->all();
        $contents = Content::findOrFail($id);

        $pathToStore = public_path('admin/img');

        if ($request->hasFile('logo_kanan_atas')) 
        {
            $file = $request->file('logo_kanan_atas');
            $rules = array('file' => 'required|mimes:png,gif,jpeg');
            $validator = \Illuminate\Support\Facades\Validator::make(array('file'=> $file), $rules);

            if($validator->passes()) 
            {
                $filename = $file->getClientOriginalName(); 
                $extension = $file -> getClientOriginalExtension();
                $picture = sha1($filename . time()) . '.' . $extension; 
                $file->move($pathToStore, $picture);
            }

            $request_all['logo_kanan_atas'] = "{$picture}";

        }

        $contents->update($request_all);
        
        return redirect()->route('content.index');
    }
}
