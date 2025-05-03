<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'kodeKategori' => 'required|string|max:10',
            'namaKategori' => 'required|string|max:100',
        ]);

        // Simpan ke database
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);


        return redirect('/kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategori = KategoriModel::where('kategori_id', $id)->firstOrFail();
        return view('kategori.edit', compact('kategori'));
    }
    
    public function destroy($id)
    {
        $kategori = KategoriModel::where('kategori_id', $id)->firstOrFail();
        $kategori->delete();
    
        return redirect()->route('kategori.index')->with('success', 'Data berhasil dihapus.');
    }
    
    public function update(Request $request, $id)
{
    $request->validate([
        'kategori_kode' => 'required|string|max:50',
        'kategori_nama' => 'required|string|max:100',
    ]);

    $kategori = KategoriModel::where('kategori_id', $id)->firstOrFail();
    $kategori->update([
        'kategori_kode' => $request->kategori_kode,
        'kategori_nama' => $request->kategori_nama,
    ]);

    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
}

    

}
