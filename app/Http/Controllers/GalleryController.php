<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        return view('pages.admin.galleries');
    }

    public function create()
    {
        return view('pages.admin.create-gallery');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240' // 5MB max
        ]);

        try {
            // Generate unique filename
            $filename = Str::random(20) . '.' . $request->file('image')->extension();
            
            // Store image in public disk
            $path = $request->file('image')->storeAs('gallery', $filename, 'public');
            
            // Verify the file was stored
            if (!Storage::disk('public')->exists($path)) {
                throw new \Exception('File failed to save to disk');
            }
            // Create gallery record
            Gallery::create([
                'image' => $path
            ]);
            
            return redirect()->route('admin.galleries.index')
                   ->with('success', 'Image uploaded successfully!');
                   
        } catch (\Exception $e) {
            return back()->with('error', 'Error uploading image: ' . $e->getMessage());
        }
    }
}