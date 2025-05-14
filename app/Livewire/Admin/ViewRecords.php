<?php

namespace App\Livewire\Admin;

use App\Models\Deceased;
use Livewire\Component;
use Livewire\WithPagination;

class ViewRecords extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';

    public function deleteRecord($recordId)
    {
        $record = Deceased::find($recordId);
        if ($record) {
            $record->grave->update(['status' => 'available']);
            $record->delete();
            session()->flash('message', 'Record deleted successfully.');
        } else {
            session()->flash('error', 'Record not found.');
        }
    }

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
        $records = Deceased::with(['grave'])
            ->whereLike('full_name','%' . $this->search . '%')
            ->paginate($this->perPage);

        return view('livewire.admin.view-records', compact('records'));
    }
}