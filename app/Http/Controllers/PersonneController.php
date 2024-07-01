<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Civilites;
use App\Models\Personnes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'nom' => $request->nom,
            'prenom' => $request-> prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'civilite_id' => DB::table('civilites')
                    ->where('civilite', '=', $request->civilite )
                    ->value('id'),
            'localisation_id' => DB::table('localisations')
                    ->where('localisation', '=', $request->localisation )
                    ->value('id')
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
        $id = (int)$id;
        $delete = Personnes::destroy($id);
    }
}
