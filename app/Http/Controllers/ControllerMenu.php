<?php

namespace App\Http\Controllers;
use App\Models\ModelMenu;
use Illuminate\Http\Request;

class ControllerMenu
{
     public function index()
    {
        $menus = ModelMenu::paginate(5); // 5 data per halaman
        return view('admin.daftarmenu', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'keterangan' => 'nullable',
            'harga' => 'required|integer',
            'gambar' => 'nullable|image|max:2048',
            'kategori' => 'required'
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('menu', 'public');
        }

        $kode_menu = 'MN-' . (ModelMenu::max('id') + 1);

        ModelMenu::create([
            'kode_menu' => $kode_menu,
            'nama_menu' => $request->nama_menu,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'gambar' => $gambar,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('admin.daftarmenu')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $menu = ModelMenu::findOrFail($id);
        return view('admin.editmenu', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_menu' => 'required',
            'keterangan' => 'nullable',
            'harga' => 'required|integer',
            'gambar' => 'nullable|image|max:2048',
            'kategori' => 'required'
        ]);

        $menu = ModelMenu::findOrFail($id);

        $gambar = $menu->gambar;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('menu', 'public');
        }

        $menu->update([
            'nama_menu' => $request->nama_menu,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'gambar' => $gambar,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('admin.daftarmenu')->with('success', 'Menu berhasil diupdate!');
    }

    public function destroy($id)
    {
        $menu = ModelMenu::findOrFail($id);
        $menu->delete();
        return redirect()->route('admin.daftarmenu')->with('success', 'Menu berhasil dihapus!');
    }
}
