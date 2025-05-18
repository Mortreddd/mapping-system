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
            'age' => $request->validated('age'),
            'address' => $request->validated('address'),
            'gender' => $request->validated('gender'),
            'cause_of_death' => $request->validated('cause_of_death'),
            'date_of_birth' => $request->validated('date_of_birth'),
            'date_of_death' => $request->validated('date_of_death'),
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

        $is_exists = Deceased::where('grave_id', $newGrave->id)
            ->where('id', '!=', $record->id)
            ->exists();

        if ($is_exists) {
            return back()->withErrors(['grave_number' => 'This plot number is already occupied.'])->withInput();
        }

        // Update grave statuses correctly
        $oldGrave->update(['status' => 'available']);
        $newGrave->update(['status' => 'occupied']);

        // Don't update the old grave again to 'occupied'
        // $record->grave->update(['status' => 'occupied']); ❌ REMOVE THIS

        $record->update([
            'full_name' => $request->input('full_name'),
            'grave_id' => $newGrave->id,
            'age' => $request->input('age'),
            'cause_of_death' => $request->input('cause_of_death'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'date_of_death' => $request->input('date_of_death'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Deceased record updated successfully.');
    }
}