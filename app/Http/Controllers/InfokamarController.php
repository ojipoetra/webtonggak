<?php

namespace App\Http\Controllers;

use App\Models\Infokamar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InfokamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakamar = Infokamar::all();
        return view('dashboard.infokamar', compact('datakamar'), ['judul' => 'Info Kamar']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $infoKamar = $request->validate([
            'kelas' => 'required',
            'kamar' => 'required',
            'jumlahTT' => 'required|numeric',
            'jumlahTerisi' => 'required|numeric',
            'jumlahKosong' => 'required|numeric',
        ]);
        // Infokamar::create($infoKamar);

        $infokamar = new Infokamar();
        $infokamar->kelas = $request->kelas;
        $infokamar->kamar = $request->kamar;
        $infokamar->jumlahTT = $request->jumlahTT;
        $infokamar->jumlahTerisi = $request->jumlahTerisi;
        $infokamar->jumlahKosong = $request->jumlahKosong;
        $infokamar->save();
        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('kamar')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Infokamar $infokamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Infokamar $infokamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Infokamar $infokamar)
    {
        $rules = $request->validate([
            'kelas' => 'required|string',
            'Kamar' => 'required|string',
            'jumlahTT' => 'required|numeric',
            'jumlahTerisi' => 'required|numeric',
            'jumlahKosong' => 'required|numeric',
        ]);


        Infokamar::where('id', $infokamar->id)->update($rules);
        Alert::success('Success', 'Data berhasil diupdate');

        return redirect('/kamar')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infokamar $infokamar)
    {
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        Infokamar::destroy($infokamar->id);
        return redirect('/kamar')->with('success', 'Data berhasil dihapus');
    }
}
