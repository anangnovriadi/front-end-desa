<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Perangkat;

class PerangkatController extends Controller
{
    public function view() {
        $perangkats = Perangkat::all();

        return view('admin.perangkat.index', compact(['perangkats']));
    }

    public function create() {
        return view('admin.perangkat.create');
    }

    public function store(Request $request) {
        $pathToStore = public_path('admin/img');

        if($request->hasFile('img_thumb')) {
            $foto = $request->file('img_thumb');
            $filename = $foto->getClientOriginalName(); 
            $extension = $foto->getClientOriginalExtension();
            $foto_name = sha1($filename . time()) . '.' . $extension;
            $foto->move($pathToStore, $foto_name);
        }

        Perangkat::create([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'img_thumb' => $foto_name,
            'status_kepala' => $request->status_kepala
        ]);

        return redirect()->route('perangkat.index');
    }

    public function edit(Request $request, $id) {
        $perangkats = Perangkat::find($id);

        return view('admin.perangkat.edit', compact('perangkats'));
    }

    public function update(Request $request, $id) {
        $request_all = $request->all();
        $perangkats = Perangkat::findOrFail($id);
        $pathToStore = public_path('admin/img');

        if($request->hasFile('img_thumb')) {
            $foto = $request->file('img_thumb');
            $filename = $foto->getClientOriginalName(); 
            $extension = $foto->getClientOriginalExtension();
            $foto_name = sha1($filename . time()) . '.' . $extension;
            $foto->move($pathToStore, $foto_name);

            $request_all['img_thumb'] = "{$foto_name}";
        }

        $perangkats->update($request_all);
        
        return redirect()->route('perangkat.index');
    }

    public function destroy($id) {
        $perangkats = Perangkat::find($id);

        $perangkats->delete();

        return redirect()->route('perangkat.index');
    }
}
