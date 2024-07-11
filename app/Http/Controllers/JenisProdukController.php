<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_jenisproduk = JenisProduk::all();
        return view('jenisproduk.jenisproduk', compact('list_jenisproduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenisproduk.form_jenisproduk');
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
        JenisProduk::create($validated);
        return redirect('admin/jenisproduk')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenisproduk = JenisProduk::find($id);
        return view('jenisproduk.detail_jenisproduk', compact('jenisproduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenisproduk = JenisProduk::find($id);
        return view('jenisproduk.edit', compact('jenisproduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required | string',
        ]);

        $jenisproduk = JenisProduk::find($id);
        $jenisproduk->update($validated);
        return redirect('admin/jenisproduk')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenisproduk = JenisProduk::find($id);
        $jenisproduk->delete();return redirect('admin/jenisproduk')->with('pesan', 'Data Berhasil di Hapus');
    }
}
