<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi;

class PotensiController extends Controller
{
    public function view() {
        $potensis = Potensi::all();

        return view('admin.potensi.view', compact('potensis'));
    }

    public function create() {
        return view('admin.potensi.create');
    }

    public function store(Request $request) {
        $pathToStore = public_path('admin');

        if($request->hasFile('img_thumb')) {
            $foto = $request->file('img_thumb');
            $filename = $foto->getClientOriginalName(); 
            $extension = $foto->getClientOriginalExtension();
            $foto_name = sha1($filename . time()) . '.' . $extension;
            $foto->move($pathToStore, $foto_name);
        }

        Potensi::create([
            'name' => $request->name,
            'info' => $request->info,
            'img_thumb' => $foto_name
        ]);
            
        return redirect()->route('potensi.index');
    }

    public function edit($id) {
        $potensi = Potensi::find($id);

        return view('admin.potensi.edit', compact('potensi'));
    }

    public function update(Request $request, $id) {
        $request_all = $request->all();
        $potensis = Potensi::findOrFail($id);
        $pathToStore = public_path('admin');

        if($request->hasFile('img_thumb')) {
            $foto = $request->file('img_thumb');
            $filename = $foto->getClientOriginalName(); 
            $extension = $foto->getClientOriginalExtension();
            $foto_name = sha1($filename . time()) . '.' . $extension;
            $foto->move($pathToStore, $foto_name);

            $request_all['img_thumb'] = "{$foto_name}";
        }

        $potensis->update($request_all);

        return redirect()->route('potensi.index');
    }

    public function delete($id) {
        $potensi = Potensi::find($id);

        $potensi->delete();

        return redirect()->route('potensi.index');
    }
}
