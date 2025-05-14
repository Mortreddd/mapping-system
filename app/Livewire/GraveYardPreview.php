<?php

namespace App\Livewire;

use App\Models\Grave;
use Illuminate\Support\Collection;
use Livewire\Component;

class GraveYardPreview extends Component
{

    public Collection $graves;

    public function mount()
    {
        $this->graves = Grave::with(['deceased'])->get();
    }
    
    public function render()
    {
        return view('livewire.grave-yard-preview', [
            'graves' => $this->graves
        ]);
    }
}