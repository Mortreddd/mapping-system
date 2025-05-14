<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewRecordRequest;
use App\Models\Deceased;
use App\Models\Grave;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard');
    }


    public function insert()
    {
        return view('pages.admin.partials.create');
    }

    public function store(NewRecordRequest $request)
    {   
        $grave = Grave::where('grave_number', $request->validated('grave_number'))->first();

        // If the grave doesn't exist, return error
        if (!$grave) {
            return back()->withErrors(['grave_number' => 'The selected plot number does not exist.'])->withInput();
        }

        // Check if the grave already has a deceased assigned
        $is_exists = Deceased::where('grave_id', $grave->id)->exists();

        if ($is_exists) {
            return back()->withErrors(['grave_number' => 'This plot number is already occupied.'])->withInput();
        }

        // Create new deceased record
        Deceased::create([
            'full_name' => $request->validated('full_name'),
            'grave_id' => $grave->id,
            'date_of_birth' => $request->validated('born_date'),
            'date_of_death' => $request->validated('died_on'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Deceased record added successfully.');
    }

    public function show($id) 
    {
        $record = Deceased::with(['grave'])->findOrFail($id);
        return view('pages.admin.partials.edit', data: compact('record'));
    }

    public function update(Request $request, $id) 
    {
    
        $record = Deceased::with(['grave'])->findOrFail($id);
        $newGrave = Grave::where('grave_number', $request->only('grave_number'))->first();
        $oldGrave = Grave::findOrFail($record->grave_id);


        $is_exists = Deceased::where('grave_id', operator: $newGrave->id)
            ->where('id', '!=', $record->id) // Exclude the current record
            ->exists();
            
        if ($is_exists) {
            return back()->withErrors(['grave_number' => 'This plot number is already occupied.'])->withInput();
        }

        $oldGrave->update(['status' => 'available']);
        $newGrave->update(['status' => 'occupied']);
        $record->grave->update(['status' => 'occupied']);
        $record->update([
            'full_name' => $request->input('full_name'),
            'grave_id' => $newGrave->id,
            'date_of_birth' => $request->input('born_date'),
            'date_of_death' => $request->input('died_on'),
        ]);
        
        return redirect()->route('admin.dashboard')->with('success', 'Deceased record updated successfully.');
    }
}