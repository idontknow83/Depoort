<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($filename) {
        $url = Storage::url("uploads/{$filename}");

        return view('file.show', ['url' => $url]);
    }
    public function upload(Request $request) {
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf|max:2048',
        ]);
    
        $file = $request->file('file');
        $path = $file->store('uploads', 'public');
    
        // Additional logic (e.g., storing file information in the database)
    
        return "File uploaded successfully!";
    }
}
