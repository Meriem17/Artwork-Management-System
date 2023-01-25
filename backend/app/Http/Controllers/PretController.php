<?php

namespace App\Http\Controllers;
use App\Models\Pret;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PretRequest;
use App\Http\Resources\PretResource;

class PretController extends Controller
{
    public function index()
    {

    $prets = Pret::all();


     return PretResource::collection($prets);
    }
    public function store(PretRequest $request)
    {
            // La validation de données
            $this->validate($request, [
                'institution'=> 'required',
                'nomExposition'=> 'required',
                'dateDepart'=> 'required',
                'dateRetour'=> 'required',
                'ouvrage_id'=> 'required',  
            ]);

    // On crée un nouvel utilisateur
    $pret = Pret::create([
            'institution'=> $request->institution,
            'nomExposition'=> $request->nomExposition,
            'dateDepart'=> $request->dateDepart,
            'dateRetour'=> $request->dateRetour,
            'ouvrage_id'=> $request->ouvrage_id,
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($pret, 201);
    }
    public function show($id)
    {
      $pret= Pret::findOrFail($id);
     return new PretResource( $pret);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(PretRequest $request, $id)
    {
        $pret =  Pret::findOrFail($id);
    $this->validate($request, [
        'institution'=> 'required',
        'nomExposition'=> 'required',
        'dateDepart'=> 'required',
        'dateRetour'=> 'required',
        'ouvrage_id'=> 'required', 
    ]);

    // On modifie les informations de l'utilisateur
    $pret ->update([
        'institution'=> $request->institution,
        'nomExposition'=> $request->nomExposition,
        'dateDepart'=> $request->dateDepart,
        'dateRetour'=> $request->dateRetour,
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
        $pret  = Pret::find($id);
        $pret ->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
