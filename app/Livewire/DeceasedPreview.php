<?php

namespace App\Livewire;

use App\Models\Deceased;
use Livewire\Component;
use Livewire\WithPagination;

class DeceasedPreview extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    public function updatedSearch() 
    {
        $this->resetPage();
    }

      public function goToPage($pageNumber)
    {
        $this->setPage($pageNumber);
    }

      public function nextPage()
    {
        $this->setPage($this->getPage() + 1);
    }

    public function previousPage()
    {
        $this->setPage($this->getPage() - 1);
    }


    public function updatedPerPage()
    {
        $this->resetPage();
    }
    public function render()
    {
        $deceaseds = Deceased::with(['grave'])
            ->where('full_name', 'like', '%' . $this->search . '%')
            ->paginate($this->perPage);

        return view('livewire.deceased-preview', [
            'deceaseds' => $deceaseds
        ]);
    }
}