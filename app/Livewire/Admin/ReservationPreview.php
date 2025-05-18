<?php

namespace App\Livewire\Admin;

use App\Mail\AcceptedReservation;
use App\Mail\RejectedReservation;
use App\Models\Deceased;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class ReservationPreview extends Component
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
    public function acceptReservation($reservationId)
    {
        $reservation = Reservation::find($reservationId);
        
        if ($reservation) {
            $reservation->update(['status' => 'confirmed']);
            $reservation->grave->update(['status' => 'occupied']);
            Deceased::create([
                'full_name' => $reservation->deceased_full_name,
                'date_of_birth' => $reservation->date_of_birth,
                'date_of_death' => $reservation->date_of_death,
                'cause_of_death' => $reservation->cause_of_death,
                'age' => $reservation->age,
                'address' => $reservation->address,
                'gender' => $reservation->gender,
                'grave_id' => $reservation->grave_id,
            ]);
            $reservation->delete();
            Mail::to($reservation->email)->send(new AcceptedReservation());
            session()->flash('message', 'Reservation approved successfully.');
        } else {
            session()->flash('error', 'Reservation not found.');
        }
    }

    public function rejectReservation($reservationId)
    {
        $reservation = Reservation::find($reservationId);
        
        if ($reservation) {
            $reservation->grave->update(['status' => 'available']);
            
            Mail::to($reservation->email)->send(new RejectedReservation());
            $reservation->delete();
            session()->flash('message', 'Reservation rejected successfully.');
        } else {
            session()->flash('error', 'Reservation not found.');
        }
    }
    
    public function render()
    {
        $reservations = Reservation::query()
            ->when($this->search, function ($query) {
                $query->where(function($q) {
                    $q->where('full_name', 'like', '%'.$this->search.'%')
                      ->orWhere('deceased_full_name', 'like', '%'.$this->search.'%')
                      ->orWhereHas('grave', function($graveQuery) {
                          $graveQuery->where('grave_number', 'like', '%'.$this->search.'%');
                      });
                });
            })
            ->with('grave')
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);
        return view('livewire.admin.reservation-preview', [
            'reservations' => $reservations,
        ]);
    }
}