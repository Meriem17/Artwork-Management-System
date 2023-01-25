<?php

namespace App\Http\Controllers;

use App\Models\FicheOeuvre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FicheOeuvreRequest;
use App\Http\Resources\FicheOeuvreResource;


class FicheOeuvreController extends Controller
{
    public function index()
    {

    $ficheOeuvres = FicheOeuvre::all();


     return FicheOeuvreResource::collection($ficheOeuvres);
    }
    public function store(FicheOeuvreRequest $request)
    {
            // La validation de données
            $this->validate($request, [
                'nomRedacteur'=> 'required',
                'DateRedaction'=> 'required',
                'dateModification',
                'ouvrage_id'=> 'required',
            ]);

    // On crée un nouvel utilisateur
    $ficheOeuvre = FicheOeuvre::create([            
            'nomRedacteur'=> $request->nomRedacteur,
            'DateRedaction'=> $request->DateRedaction,
            'dateModification'=> $request->dateModification,
            'ouvrage_id'=> $request->ouvrage_id,
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($ficheOeuvre, 201);
    }
    public function show($id)
    {
      $ficheOeuvre= FicheOeuvre::findOrFail($id);
     return new FicheOeuvreResource($ficheOeuvre);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(FicheOeuvreRequest $request, $id)
    {
        $ficheOeuvre=  FicheOeuvre::findOrFail($id);
    $this->validate($request, [
        'nomRedacteur'=> 'required',
        'DateRedaction'=> 'required',
        'dateModification',
        'ouvrage_id'=> 'required',
    ]);

    // On modifie les informations de l'utilisateur
    $ficheOeuvre ->update([
        'nomRedacteur'=> $request->nomRedacteur,
        'DateRedaction'=> $request->DateRedaction,
        'dateModification'=> $request->dateModification,
        'ouvrage_id'=> $request->ouvrage_id,

    ]);

    // On retourne la réponse JSON
    return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ficheOeuvre = FicheOeuvre::find($id);
        $ficheOeuvre->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
