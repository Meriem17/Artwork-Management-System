<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpositionResource extends JsonResource
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
            'titre'=> ucfirst($this->titre),
            'lieuExpo'=> ucfirst($this->lieuExpo),
            'dateDebut'=> $this->dateDebut,
            'dateFin'=> $this->dateFin,
            'contraintes'=> ucfirst($this->contraintes),
        ];
    }
}
