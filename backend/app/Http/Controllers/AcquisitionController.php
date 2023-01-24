<?php

namespace App\Http\Controllers;

use App\Models\Acquisition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AcquisitionRequest;
use App\Http\Resources\AcquisitionResource; 

class AcquisitionController extends Controller
{
    public function index()
    {

    $acquisitions = Acquisition::all();

     return AcquisitionResource::collection($acquisitions);

    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcquisitionRequest $request)
    {
            // La validation de données
            $this->validate($request, [
                'poprietaire'=> 'required',
                'date'=> 'required',
                'lieu'=> 'required',
                'prix'=> 'required',
                'moyenAcquisition'=> 'required',
                'preuveAchat'=> 'required',
                'certificatAuthenticite'
            ]);

    // On crée un nouvel utilisateur
    $acquisition = Acquisition::create([
            'poprietaire'=> $request->poprietaire,
            'date'=> $request->date,
            'lieu'=> $request->lieu,
            'prix'=> $request->prix,
            'moyenAcquisition'=> $request->moyenAcquisition,
            'preuveAchat'=> $request->preuveAchat,
            'certificatAuthenticite'=> $request->certificatAuthenticite,
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($acquisition, 201);
    }

    public function show($id)
    {
      $acquisition= Acquisition::findOrFail($id);
     return new AcquisitionResource( $acquisition);

    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(AcquisitionRequest $request, $id)
    {
        $acquisition =  Acquisition::findOrFail($id);
    $this->validate($request, [
        'poprietaire'=> 'required',
        'date'=> 'required',
        'lieu'=> 'required',
        'prix'=> 'required',
        'moyenAcquisition'=> 'required',
        'preuveAchat'=> 'required',
        'certificatAuthenticite'
    ]);

    // On modifie les informations de l'utilisateur
    $acquisition->update([
        'poprietaire'=> $request->poprietaire,
        'date'=> $request->date,
        'lieu'=> $request->lieu,
        'prix'=> $request->prix,
        'moyenAcquisition'=> $request->moyenAcquisition,
        'preuveAchat'=> $request->preuveAchat,
        'certificatAuthenticite'=> $request->certificatAuthenticite,

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
        $acquisition = Acquisition::find($id);
        $acquisition->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
