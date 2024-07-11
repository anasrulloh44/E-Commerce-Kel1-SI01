<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_testimoni = Testimoni::all();
        return view('testimoni.testimoni', compact('list_testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimoni.form_testimoni');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'tanggal' => 'required | string',
            'nama_tokoh' => 'required | string',
            'komentar' => 'required | string',
            'rating' => 'required | string',
            'produk_id' => 'required | string',
            'kategori_tokoh_id' => 'required | string',
        ]);
        Testimoni::create($validated);
        return redirect('admin/testimoni')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimoni = Testimoni::find($id);
        return view('testimoni.detail_testimoni', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimoni = Testimoni::find($id);
        return view('testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'tanggal' => 'required | string',
            'nama_tokoh' => 'required | string',
            'komentar' => 'required | string',
            'rating' => 'required | string',
            'produk_id' => 'required | string',
            'kategori_tokoh_id' => 'required | string',
        ]);

        $testimoni = Testimoni::find($id);
        $testimoni->update($validated);
        return redirect('admin/testimoni')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();return redirect('admin/testimoni')->with('pesan', 'Data Berhasil di Hapus');
    }
}
