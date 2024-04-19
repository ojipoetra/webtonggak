<?php

namespace App\Http\Controllers;

use App\Models\Fileupload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class FileuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            $documen = Fileupload::all();
            return view('dashboard.fileupload.documentfile', compact('documen'), ['judul' => 'File Uploader']);
        } else {
            auth()->user()->role == 'user';
            $documen = Fileupload::where('user_id', auth()->user()->id)->get();
            return view('dashboard.fileupload.documentfile', compact('documen'), ['judul' => 'File Uploader']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.fileupload.fileuploader', ['judul' => 'File Uploader']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'deskripsi' => 'required',
            'name_file' => 'required|mimes:doc,docx,pdf,xls,xlsx,ppt,pptx'
        ]);

        // $file = $request->file('dokumen');
        if ($request->file('name_file')) {
            $validateData['name_file'] = $request->file('name_file')->store('assets-file');
        }
        Alert::success('Success', 'Data berhasil diupload');

        $request->user()->fileupload()->create($validateData);
        return redirect('/fileupload')->with('success', 'Data berhasil diupload');
    }
    /**
     * Display the specified resource.
     */
    public function show(Fileupload $fileupload)
    {
        // $documen = Fileupload::all();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fileupload $fileupload)
    {
        $fileupdate = Fileupload::find($fileupload->id);
        return view('dashboard.fileupload.documentfileupdate', compact('fileupdate'), ['judul' => 'File Uploader (Update)']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fileupload $fileupload)
    {
        $validateData = $request->validate([
            'deskripsi' => 'required',
            'name_file' => 'required|mimes:doc,docx,pdf,xls,xlsx,ppt,pptx'
        ]);

        // $file = $request->file('dokumen');
        if ($request->file('name_file')) {
            $validateData['name_file'] = $request->file('name_file')->store('assets-file');
        }
        Alert::success('Success', 'Data berhasil diupdate');

        Fileupload::where('id', $fileupload->id)->update($validateData);
        return redirect('/fileupload')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fileupload $fileupload)
    {
        $title = "Kamu Yakin Ingin Mneghapus ?";
        $text = "Data yang dihapus tidak bisa dikembalikan";
        confirmDelete($title, $text);

        Storage::delete($fileupload->name_file);
        Fileupload::destroy($fileupload->id);

        return redirect('/fileupload')->with('delete', 'Data berhasil dihapus');
    }
}
