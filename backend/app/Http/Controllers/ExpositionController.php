<?php

namespace App\Http\Controllers;

use App\Models\Exposition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ExpositionRequest;
use App\Http\Resources\ExpositionResource;

class ExpositionController extends Controller
{
    public function index()
    {

    $expositions = Exposition::all();


     return ExpositionResource::collection($expositions);
    }

    public function store(ExpositionRequest $request)
    {
            // La validation de données
            $this->validate($request, [
                'titre'=>'required',
                'lieuExpo'=>'required',
                'dateDebut'=>'required',
                'dateFin'=>'required',
                'contraintes'=>'required',
            ]);

    // On crée un nouvel utilisateur
    $exposition = Exposition::create([
            'titre'=> $request->titre,
            'lieuExpo'=> $request->lieuExpo,
            'dateDebut'=> $request->dateDebut,
            'dateFin'=> $request->dateFin,
            'contraintes'=> $request->contraintes,
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($exposition, 201);
    }
    public function show($id)
    {
      $exposition= Exposition::findOrFail($id);
     return new ExpositionResource( $exposition);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(ExpositionRequest $request, $id)
    {
        $exposition=  Exposition::findOrFail($id);
    $this->validate($request, [
        'titre'=>'required',
        'lieuExpo'=>'required',
        'dateDebut'=>'required',
        'dateFin'=>'required',
        'contraintes'=>'required',
    ]);

    // On modifie les informations de l'utilisateur
    $exposition ->update([
        'titre'=> $request->titre,
        'lieuExpo'=> $request->lieuExpo,
        'dateDebut'=> $request->dateDebut,
        'dateFin'=> $request->dateFin,
        'contraintes'=> $request->contraintes,

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
        $exposition = Exposition::find($id);
        $exposition->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
