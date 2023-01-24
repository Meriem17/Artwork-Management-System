<?php

namespace App\Http\Controllers;
use App\Models\ouvrage;
use Illuminate\Http\Request;
use App\Http\Requests\OuvrageRequest;
use App\Http\Resources\OuvrageResource;
class OuvrageController extends Controller
{
    public function index()
    {

    $ouvrages = ouvrage::all();

     return OuvrageResource::collection($ouvrages);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OuvrageRequest $request)
    {
            // La validation de données
            $this->validate($request, [
                'titre'=>"required",
                'dateCreation'=>"required",
                'materials'=>"required",
                'support'=>"required", 
                'dimensions'=>"required",
                'poid'=>"required",
                'nbrElemt'=>"required",
                'numTerage'=>"required",
                'typeTirage'=>"required",
                'description'=>"required",
                'artiste_id'=>"required"
            ]);
        
    // On crée un nouvel utilisateur
    $ouvrage = ouvrage::create([
        'titre'=>  $request->titre,
        'dateCreation'=> $request->dateCreation,
        'materials'=>  $request->materials,
        'support'=>  $request->support, 
        'dimensions'=>  $request->dimensions,
        'poid'=>  $request->poid,
        'nbrElemt'=>  $request->nbrElemt,
        'numTerage'=>  $request->numTerage,
        'typeTirage'=>  $request->typeTirage,
        'description'=>  $request->description,
        'artiste_id'=>  $request->artiste_id
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($ouvrage, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ouvrage= ouvrage::findOrFail($id);
     return new OuvrageResource($ouvrage);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(OuvrageRequest $request, $id)
    {
        $ouvrage= ouvrage::findOrFail($id);
        $this->validate($request, [
            'titre'=>"required",
            'dateCreation'=>"required",
            'materials'=>"required",
            'support'=>"required", 
            'dimensions'=>"required",
            'poid'=>"required",
            'nbrElemt'=>"required",
            'numTerage'=>"required",
            'typeTirage'=>"required",
            'description'=>"required",
            'artiste_id'=>"required"
        ]);

    // On modifie les informations de l'utilisateur
    $ouvrage->update([
        'titre'=>  $request->titre,
        'dateCreation'=> $request->dateCreation,
        'materials'=>  $request->materials,
        'support'=>  $request->support, 
        'dimensions'=>  $request->dimensions,
        'poid'=>  $request->poid,
        'nbrElemt'=>  $request->nbrElemt,
        'numTerage'=>  $request->numTerage,
        'typeTirage'=>  $request->typeTirage,
        'description'=>  $request->description,
        'artiste_id'=>  $request->artiste_id

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
        $ouvrage = ouvrage::find($id);
        $ouvrage->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
