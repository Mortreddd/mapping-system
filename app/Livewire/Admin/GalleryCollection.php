<?php

namespace App\Livewire\Admin;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class GalleryCollection extends Component
{

    public function deleteGallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        if(Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }
        $gallery->delete();    
    }
    
    public function render()
    {
        $galleries = Gallery::all();
        return view('livewire.admin.gallery-collection', compact('galleries'));
    }
}