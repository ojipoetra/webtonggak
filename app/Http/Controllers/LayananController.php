<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $layanan = Layanan::all();
        // return view('menu.home', ['layanan' => $layanan]);
    }

    public function poli()
    {
        $layanan = Layanan::all();
        return view('menu.home', ['layanan' => $layanan]);
    }

    public function viewpoli($slug)
    {
        $layanan = Layanan::where('slug', $slug)->firstOrFail();
        return view('layanan.show', compact('layanan'));
    }

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
        //
    }

    public function detail($id)
    {
        // $layananPoli = Layanan::where('slug', $slug)->first();
        // return view('menu.layanan', ['layananPoli' => $layananPoli]);
        // $layanan = Layanan::find($id);
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
