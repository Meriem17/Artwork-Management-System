<?php

namespace App\Http\Controllers;

use App\Models\Bibliographie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BibliographieRequest;
use App\Http\Resources\BibliographieResource;

class BibliographieController extends Controller
{
    public function index()
    {

    $bibliographies = Bibliographie::all();


     return BibliographieResource::collection($bibliographies);
    }
    public function store(BibliographieRequest $request)
    {
            // La validation de données
            $this->validate($request, [
            'nomAuteur'=> 'required',
            'datePublication'=> 'required',
            'page',
            'editeur',
            'ouvrage_id'=> 'required',
            ]);

    // On crée un nouvel utilisateur
    $bibliographie = Bibliographie::create([
            'nomAuteur'=> $request->nomAuteur,
            'datePublication'=> $request->datePublication,
            'page'=> $request->page,
            'editeur'=> $request->editeur,
            'ouvrage_id'=> $request->ouvrage_id,
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($bibliographie, 201);
    }
    public function show($id)
    {
      $bibliographie= Bibliographie::findOrFail($id);
     return new BibliographieResource( $bibliographie);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(BibliographieRequest $request, $id)
    {
        $bibliographie =  Bibliographie::findOrFail($id);
    $this->validate($request, [
        'nomAuteur'=> 'required',
        'datePublication'=> 'required',
        'page',
        'editeur',
        'ouvrage_id'=> 'required',
    ]);

    // On modifie les informations de l'utilisateur
    $bibliographie ->update([
        'nomAuteur'=> $request->nomAuteur,
        'datePublication'=> $request->datePublication,
        'page'=> $request->page,
        'editeur'=> $request->editeur,
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
        $bibliographie  = Bibliographie::find($id);
        $bibliographie ->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
