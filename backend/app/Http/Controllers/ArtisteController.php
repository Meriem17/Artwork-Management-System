<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ArtisteRequest;
use App\Http\Resources\ArtisteResource;

class ArtisteController extends Controller
{
    public function index()
    {

    $artistes = Artiste::all();


     return ArtisteResource::collection($artistes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtisteRequest $request)
    {
            // La validation de données
            $this->validate($request, [
                'nom'=> 'required',
                'prenom'=> 'required',
                'dateNaissance'=> 'required',
                'lieuNaissance', 
                'dateDeces',
                'lieuDeces',
                'Nationalite'=> 'required',
                'Biographie'=> 'required|max:500',
            ]);

    // On crée un nouvel utilisateur
    $artiste = Artiste::create([
        "nom"=> $request->nom,
        "prenom"=> $request->prenom,
        "dateNaissance"=> $request->dateNaissance,
        "lieuNaissance"=> $request->lieuNaissance,
        "dateDeces"=> $request->dateDeces,
        "lieuDeces"=> $request->lieuDeces,
        "Nationalite"=> $request->Nationalite,
        "Biographie"=> $request->Biographie,
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($artiste, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $artiste= Artiste::findOrFail($id);
     return new ArtisteResource( $artiste);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(ArtisteRequest $request, $id)
    {
        $artiste =  Artiste::findOrFail($id);
    $this->validate($request, [
        'nom'=> 'required',
        'prenom'=> 'required',
        'dateNaissance'=> 'required',
        'lieuNaissance', 
        'dateDeces',
        'lieuDeces',
        'Nationalite'=> 'required',
        'Biographie'=> 'required|max:500',
    ]);

    // On modifie les informations de l'utilisateur
    $artiste->update([
        'nom'=> $request->nom,
        'prenom'=> $request->prenom,
        'dateNaissance'=> $request->dateNaissance,
        'lieuNaissance'=> $request->lieuNaissance,
        'dateDeces'=> $request->dateDeces,
        'lieuDeces'=> $request->lieuDeces,
        'Nationalite'=> $request->Nationalite,
        'Biographie'=> $request->Biographie,

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
        $artiste = Artiste::find($id);
        $artiste->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
