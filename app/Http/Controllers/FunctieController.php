<?php

namespace App\Http\Controllers;

use App\Models\Functie;
use Illuminate\Http\Request;

class FunctieController extends Controller
{
     // GET /api/functies
    public function index()
    {
        return Functie::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

  // GET /api/functies/{id}
    public function show(Functie $functie)
    {
        return $functie;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Functie $functie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Functie $functie)
    {
        //
    }
}
