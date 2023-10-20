<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::query()->paginate(20);
        return view('animals.index', compact("animals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animal = new Animal();

        return view('animals.form', compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validateAnimal($request);

        $animal = new Animal();
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->save();

        session()->flash('success', 'New animal enterd');

        return redirect()->route('animals.show', $animal->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animal = Animal::findOrFail($id);
        return view('animals.details', ['animal' => $animal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $animal = Animal::findOrFail($id);

        $owner = $animal->getOwner();


        return view('animals.form', compact('animal', 'owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateAnimal($request);

        $animal = Animal::findOrFail($id);

        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->save();

        session()->flash('success', 'Animal edited');

        return redirect()->route('animals.show', $animal->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request)
    {
        $error = 'not found';
        $searchBy = $request->input('search', false);
        $name = $request->input("name", false);
        if ($searchBy === 'animal') {
            $animals = Animal::query()
                ->where("name", "like", "%" . $name . "%")
                ->limit(10)
                ->get();
            return view('animals.search', compact("animals"));
        } elseif ($searchBy === 'owner') {
            $owners = Owner::query()
                ->where("first_name", "like", "%" . $name . "%")
                ->orWhere("surname", "like", "%" . $name . "%")
                ->limit(10)
                ->get();
            return view('owners.search', compact("owners"));
        } else {
            return redirect('/');
        }
    }

    private function validateAnimal(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
    }
}
