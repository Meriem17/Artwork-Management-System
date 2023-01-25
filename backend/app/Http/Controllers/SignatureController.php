<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SignatureRequest;
use App\Http\Resources\SignatureResource;

class SignatureController extends Controller
{
    public function index()
    {

    $signatures = Signature::all();

     return SignatureResource::collection($signatures);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignatureRequest $request)
    {
            // La validation de données
            $this->validate($request, [
                'localisation'=> 'required',
                'description'=> 'required',
                'ouvrage_id'=> 'required',
            ]);

    // On crée un nouvel utilisateur
    $signature = Signature::create([
        "localisation"=> $request->localisation,
        "description"=> $request->description,
        'ouvrage_id'=> $request->ouvrage_id,
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($signature, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $signature= Signature::findOrFail($id);
     return new SignatureResource( $signature);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(SignatureRequest $request, $id)
    {
        $signature =  Signature::findOrFail($id);
    $this->validate($request, [
        'localisation'=> 'required',
        'description'=> 'required',
        'ouvrage_id'=> 'required',
       
    ]);

    // On modifie les informations de l'utilisateur
    $signature->update([
        "localisation"=> $request->localisation,
        "description"=> $request->description,
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
        $signature = Signature::find($id);
        $signature->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
