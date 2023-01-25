<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaurationResource extends JsonResource
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
            'constat'=> ucfirst($this->constat),
            'causes'=>$this->causes,
            'dateRestauration'=>$this->dateRestauration,
            'lieuRestauration'=> ucfirst($this->lieuRestauration),
            'nomRestaurateur'=> ucfirst($this->nomRestaurateur),
            'typeIntervention'=> ucfirst($this->typeIntervention),
            'materials'=> ucfirst($this->typeIntervention),
            'ouvrage_id'=> $this->ouvrage_id
        ];

    }
}
