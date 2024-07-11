<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Tokoh;
use Illuminate\Http\Request;

class KategoriTokohController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kategoritokoh = Kategori_Tokoh::all();
        return view('kategoritokoh.kategoritokoh', compact('list_kategoritokoh'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategoritokoh.form_kategoritokoh');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required | string',
        ]);
        Kategori_Tokoh::create($validated);
        return redirect('admin/kategoritokoh')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategoritokoh = Kategori_Tokoh::find($id);
        return view('kategoritokoh.detail_kategoritokoh', compact('kategoritokoh'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoritokoh = Kategori_Tokoh::find($id);
        return view('kategoritokoh.edit', compact('kategoritokoh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required | string',
        ]);

        $kategoritokoh = Kategori_Tokoh::find($id);
        $kategoritokoh->update($validated);
        return redirect('admin/kategoritokoh')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoritokoh = Kategori_Tokoh::find($id);
        $kategoritokoh->delete();return redirect('admin/kategoritokoh')->with('pesan', 'Data Berhasil di Hapus');
    }
}
