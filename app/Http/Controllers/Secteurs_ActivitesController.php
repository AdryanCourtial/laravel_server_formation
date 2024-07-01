<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Secteurs_activites;
use Illuminate\Http\Request;

class Secteurs_ActivitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Secteurs_activites::all();
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
