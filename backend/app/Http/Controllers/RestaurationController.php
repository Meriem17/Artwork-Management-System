<?php

namespace App\Http\Controllers;

use App\Models\Restauration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurationRequest;
use App\Http\Resources\RestaurationResource;

class RestaurationController extends Controller
{
    public function index()
    {

    $restaurations = Restauration::all();


     return RestaurationResource::collection($restaurations);
    }

    public function store(RestaurationRequest $request)
    {
            // La validation de données
            $this->validate($request, [
                'constat'=> 'required',
                'causes'=>'required',
                'dateRestauration'=>'required',
                'lieuRestauration',
                'nomRestaurateur'=> 'required',
                'typeIntervention'=> 'required',
                'materials',
                'ouvrage_id'=> 'required',
            ]);

    // On crée un nouvel utilisateur
    $restauration = Restauration::create([
            'constat'=> $request->constat,
            'causes'=> $request->causes,
            'dateRestauration'=> $request->dateRestauration,
            'lieuRestauration'=> $request->lieuRestauration,
            'nomRestaurateur'=> $request->nomRestaurateur,
            'typeIntervention'=> $request->typeIntervention,
            'materials'=> $request->materials,
            'ouvrage_id'=> $request->ouvrage_id,
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($restauration, 201);
    }
    public function show($id)
    {
      $restauration= Restauration::findOrFail($id);
     return new RestaurationResource( $restauration);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurationRequest $request, $id)
    {
        $restauration=  Restauration::findOrFail($id);
    $this->validate($request, [
        'constat'=> 'required',
        'causes'=>'required',
        'dateRestauration'=>'required',
        'lieuRestauration',
        'nomRestaurateur'=> 'required',
        'typeIntervention'=> 'required',
        'materials',
        'ouvrage_id'=> 'required',
    ]);

    // On modifie les informations de l'utilisateur
    $restauration ->update([
        'constat'=> $request->constat,
        'causes'=> $request->causes,
        'dateRestauration'=> $request->dateRestauration,
        'lieuRestauration'=> $request->lieuRestauration,
        'nomRestaurateur'=> $request->nomRestaurateur,
        'typeIntervention'=> $request->typeIntervention,
        'materials'=> $request->materials,
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
        $restauration  = Restauration::find($id);
        $restauration ->delete();

    // On retourne la réponse JSON
    return response()->json();
    }

}
