<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.iklan.iklan', ['judul' => 'Iklan']);
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
        $validation = $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $request->user()->iklan()->create($validation);
        return redirect('/iklan')->with('success', 'Data berhasil diupload');
    }

    /**
     * Display the specified resource.
     */
    public function show(Iklan $iklan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Iklan $iklan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Iklan $iklan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iklan $iklan)
    {
        //
    }
}
