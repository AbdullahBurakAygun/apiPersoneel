<?php

namespace App\Http\Controllers;

use App\Models\Werknemer;
use Illuminate\Http\Request;



class WerknemerController extends Controller
{
     // GET /api/werknemers
    public function indexFunctie(Request $request, $id)
    {
        return Werknemer::where('functie_id',$id)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Werknemer::create($request->all());
    }

  // GET /api/werknemers/{id}
    public function show(Werknemer $werknemer)
    {
        return $werknemer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Werknemer $werknemer)
    {
        $werknemer->update($request->all()); return $werknemer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyFunctie(Request $request, $id)
    {
      Werknemer::where('functie_id', $id)->delete();
    }
}
