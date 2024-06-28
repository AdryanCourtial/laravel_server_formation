<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personnes;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $personnes = Personnes::with('civilite', 'localisation', 'entreprise')->get();
        return response()->json($personnes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Personnes::create([
            'nom' => $request->nom
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
