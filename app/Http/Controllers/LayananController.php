<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Datalayanan = Layanan::all();
        return view('dashboard.layanan.layanan', compact('Datalayanan'), ['judul' => 'Layanan']);
    }

    // public function poli()
    // {
    //     $layanan = Layanan::all();
    //     return view('menu.home', ['layanan' => $layanan]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.formlayanan', ['judul' => 'Layanan']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_layanan' => 'required',
            'slug' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-images');
        }
        $layanan = new Layanan;
        $layanan->nama_layanan = $validateData['nama_layanan'];
        $layanan->slug = $validateData['slug'];
        $layanan->deskripsi = $validateData['deskripsi'];
        $layanan->gambar = $validateData['gambar'];

        $layanan->save();
        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('/layanan');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        // return view('layanan', compact('layanan'), ['judul' => 'Layanan']);
        // return view('menu.layanan', ['layanan' => $layanan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        //
    }
}
