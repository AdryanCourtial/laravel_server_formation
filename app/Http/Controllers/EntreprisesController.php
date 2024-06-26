<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entreprises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\error;

class EntreprisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entreprises = Entreprises::with('secteur_activite', 'personnes')->get();
        return response()->json($entreprises);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Entreprises::create([
            'nom' => $request->nom,
            'secteur_activite_id' => DB::table('secteurs_activites')->where('secteur_activite', '=', $request->secteur_activite)->value('id'),
            'code_postal' => $request->code_postal,
            'ville' => $request->ville,
            'chiffres_affaires' => $request->chiffres_affaires,
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
        Entreprises::destroy($id);
    }
}
