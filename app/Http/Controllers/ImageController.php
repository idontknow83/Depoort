<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function showForm() {
        return view('profile.partials.image-upload-form');
    }

    public function store(Request $request, User $user) {
        // $request->validate([
        //     'file' => 'required|mimes:pdf|max:2048', // Example validation rules
        // ]);
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName);
        // $user->find($request->id);
        DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'image' => $filePath
            ]);
        return back()->with(['success' => true, 'message' => 'Image uploaded successfully']);
    }
}
