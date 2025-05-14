<?php

namespace App\Http\Controllers;

use App\Models\Grave;
use Illuminate\Http\Request;

class GraveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Grave $grave)
    {
        $grave->load('deceased');
        return view('pages.grave-slot', [
            'grave' => $grave,
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grave $grave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grave $grave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grave $grave)
    {
        //
    }
}