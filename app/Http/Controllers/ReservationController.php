<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewReservationRequest;
use App\Models\Grave;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function index()
    {
        return view('pages.admin.reservations');
    }

    public function createReservation()
    {
        return view('pages.create-reservation');
    }   

    public function storeReservation(NewReservationRequest $request)
    {
        try {
            $validated = $request->validated();
            
            $grave = Grave::where('grave_number', $validated['grave_number'])->first();
            
            $reservation = Reservation::create([
                'full_name' => $validated['full_name'],
                'email' => $validated['email'],
                'contact_number' => $validated['contact_number'],
                'relationship' => $validated['relationship'],
                'grave_id' => $grave->id,
                'date_of_birth' => $validated['date_of_birth'],
                'date_of_death' => $validated['date_of_death'],
                'deceased_full_name' => $validated['deceased_full_name'],
                'age' => $validated['age'],
                'address' => $validated['address'],
                'gender' => $validated['gender'],
                'cause_of_death' => $validated['cause_of_death']
            ]);

            $grave->update(['status' => 'reserved']);

            return redirect()->route('reservations.success')
                ->with('message', 'Reservation created successfully! You will receive a confirmation email in '.$reservation->email.' shortly.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error creating reservation: '.$e->getMessage())
                ->withInput();
        }

    }


    public function successReservation()
    {
        return view('pages.success-reservation');
    }

    
}