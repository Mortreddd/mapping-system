<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewReservationRequest;
use App\Models\Grave;
use App\Models\Reservation;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{

    public function index()
    {
        return view('pages.admin.reservations');
    }

    public function storeReservation(NewReservationRequest $request)
    {
        try {
            
            $grave = Grave::where('grave_number', $request->validated('grave_number'))->first();
            
            $reservation = Reservation::create([
                'full_name' => $request->validated('full_name'),
                'email' => $request->validated('email'),
                'contact_number' => $request->validated('contact_number'),
                'relationship' => $request->validated('relationship'),
                'grave_id' => $grave->id,
                'date_of_birth' => $request->validated('date_of_birth'),
                'date_of_death' => $request->validated('date_of_death'),
                'deceased_full_name' => $request->validated('deceased_full_name'),
                'age' => $request->validated('age'),
                'address' => $request->validated('address'),
                'gender' => $request->validated('gender'),
                'cause_of_death' => $request->validated('cause_of_death')
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
    public function createReservation()
    {
        return view('pages.create-reservation');
    }   



    public function successReservation()
    {
        return view('pages.success-reservation');
    }

    
}