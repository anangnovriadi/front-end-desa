<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Content;

class ContentController extends Controller
{
    public function view() {
        $contents = Content::all();

        return view('admin.content.index', compact('contents'));
    }

    public function edit(Request $request, $id) {
        $contents = Content::find($id);

        return view('admin.content.edit', compact('contents'));
    }

    public function update(Request $request, $id) {
        $contents = Content::find($id);

        $contents->update([
            'header_top' => $request->header_top,
            'logo_kanan_atas' => $request->logo_kanan_atas,
            'alamat_bottom' => $request->alamat_bottom,
            'author' => $request->author
        ]);

        return redirect()->route('content.index');
    }
}
