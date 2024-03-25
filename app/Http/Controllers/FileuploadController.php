<?php

namespace App\Http\Controllers;

use App\Models\Fileupload;
use Illuminate\Http\Request;

class FileuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.fileuploader');
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
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        $fileModel = new Fileupload;

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time() . '_' . $request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Fileupload $fileupload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fileupload $fileupload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fileupload $fileupload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fileupload $fileupload)
    {
        //
    }
}
