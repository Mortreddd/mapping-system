<?php

namespace App\Livewire;

use App\Models\Grave;
use Livewire\Component;

class SearchResult extends Component
{

    public $search = '';

    public function render()
    {
        $results = collect();

        if ($this->search !== '') {
            if (is_numeric($this->search)) {
                // Search by grave_number only
                $results = Grave::with('deceased')
                    ->whereLike('grave_number', $this->search . '%')
                    ->get();
            } else {
                // Search by deceased full_name only
                $results = Grave::whereHas('deceased', function ($query) {
                        $query->whereLike('full_name', '%' . $this->search . '%');
                    })
                    ->with('deceased')
                    ->get();
            }
        }
        return view('livewire.search-result', compact('results'));
    }
}