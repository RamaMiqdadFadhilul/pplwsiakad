<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MataKuliah::orderBy('kode_mk')->get();

        return view('mata-kuliah.index', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mata-kuliah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|string|max:10|unique:mata_kuliah,kode_mk',
            'nama_mk' => 'required|string|max:100',
            'sks' => 'required|integer|between:1,6',
        ]);

        MataKuliah::create($validated);

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);

        return view('mata-kuliah.edit', compact('mk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mk = MataKuliah::findOrFail($id);

        $validated = $request->validate([
            'kode_mk' => 'required|string|max:10|unique:mata_kuliah,kode_mk,'
                        . $id . ',id_mk',
            'nama_mk' => 'required|string|max:100',
            'sks' => 'required|integer|between:1,6',
        ]);

        $mk->update($validated);

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);

        $mk->delete();

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
