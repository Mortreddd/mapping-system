<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class GalleryList extends Component
{
    public function render()
    {
        $galleries = Gallery::all();
        return view('livewire.gallery-list', compact('galleries'));
    }
}