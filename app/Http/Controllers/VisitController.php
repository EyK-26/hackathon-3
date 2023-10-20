<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
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
        $visit = new Visit();
        return view('visits.form', compact('visit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $visit = new Visit();
        $visit->animal_id = $request->input('animalId');
        $visit->owner_id =  $request->input('ownerId');
        $visit->description = $request->input("description");
        $visit->visit_date = $request->input("visit_date");
        $visit->save();
        session()->flash('success', 'New visit created');
        return redirect()->route('animals.show', $visit->animal_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
