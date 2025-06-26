<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelDataSiswa;

class ControllerDataSiswa
{
    // Tampilkan semua data siswa
    public function index()
    {
        $siswa = ModelDataSiswa::all();
        return view('admin.datasiswa', compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'class' => 'required|string|max:50',
            'gender' => 'required|in:Male,Female',
            'menu_price' => 'required|string|max:20',
            'allergies' => 'nullable|string|max:255',
            'additional_note' => 'nullable|string|max:255',
        ]);

        // Generate ID Student otomatis
        $lastStudent = ModelDataSiswa::orderBy('id', 'desc')->first();
        $lastId = $lastStudent ? intval(str_replace('SIS-', '', $lastStudent->id_student)) : 0;
        $newIdStudent = 'SIS-' . ($lastId + 1);

        // Simpan ke database
        ModelDataSiswa::create([
            'id_student' => $newIdStudent,
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'class' => $request->class,
            'gender' => $request->gender,
            'menu_price' => $request->menu_price,
            'allergies' => $request->allergies,
            'additional_note' => $request->additional_note,
        ]);

        return redirect()->route('admin.datasiswa')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function storeLanding(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'class' => 'required|string|max:50',
            'gender' => 'required|in:Male,Female',
            'menu_price' => 'required|string|max:20',
            'allergies' => 'nullable|string|max:255',
            'additional_note' => 'nullable|string|max:255',
        ]);

        // Generate ID Student otomatis
        $lastStudent = ModelDataSiswa::orderBy('id', 'desc')->first();
        $lastId = $lastStudent ? intval(str_replace('SIS-', '', $lastStudent->id_student)) : 0;
        $newIdStudent = 'SIS-' . ($lastId + 1);

        // Simpan ke database
        ModelDataSiswa::create([
            'id_student' => $newIdStudent,
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'class' => $request->class,
            'gender' => $request->gender,
            'menu_price' => $request->menu_price,
            'allergies' => $request->allergies,
            'additional_note' => $request->additional_note,
        ]);

        return redirect()->route('formdaftar')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    // Simpan perubahan data
    public function update(Request $request, $id)
    {
        $siswa = ModelDataSiswa::findOrFail($id);

        $request->validate([
            'id_student' => 'required|string|max:20|unique:tabel_datasiswa,id_student,' . $id,
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'class' => 'required|string|max:50',
            'gender' => 'required|in:Male,Female',
            'menu_price' => 'required|string|max:20',
            'allergies' => 'nullable|string|max:255',
            'additional_note' => 'nullable|string|max:255',
        ]);

        $siswa->update($request->all());

        return redirect()->route('admin.datasiswa')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = ModelDataSiswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.datasiswa')->with('success', 'Data siswa berhasil dihapus.');
    }
}
