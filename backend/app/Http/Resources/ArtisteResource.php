<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArtisteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            'nom'=> ucfirst($this->nom),
            'prenom'=> ucfirst($this->prenom),
            'dateNaissance'=> $this->dateNaissance,
            'lieuNaissance'=> ucfirst($this->lieuNaissance),
            'dateDeces'=> $this->dateDeces,
            'lieuDeces'=> ucfirst($this->lieuDeces),
            'Nationalité'=> ucfirst($this->Nationalité),
            'Biographie'=> ucfirst($this->Biographie),

        ];
    }
}
