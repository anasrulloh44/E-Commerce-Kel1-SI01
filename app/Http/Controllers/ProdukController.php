<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_produk = Produk::all();
        return view('produk.produk', compact('list_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.form_produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'kode' => 'required | string',
            'nama' => 'required | string',
            'harga' => 'required | string',
            'stok' => 'required | string',
            'rating' => 'required | string',
            'min_stok' => 'required | string',
            'jenis_produk_id' => 'required | string',
            'deskripsi' => 'required | string',
        ]);
        Produk::create($validated);
        return redirect('admin/produk')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('produk.detail_produk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode' => 'required | string',
            'nama' => 'required | string',
            'harga' => 'required | string',
            'stok' => 'required | string',
            'rating' => 'required | string',
            'min_stok' => 'required | string',
            'jenis_produk_id' => 'required | string',
            'deskripsi' => 'required | string',
        ]);

        $produk = Produk::find($id);
        $produk->update($validated);
        return redirect('admin/produk')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();return redirect('admin/produk')->with('pesan', 'Data Berhasil di Hapus');
    }
}
