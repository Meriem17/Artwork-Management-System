<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FicheOeuvreResource extends JsonResource
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
            'nomRedacteur'=> ucfirst($this->nomRedacteur),
            'DateRedaction'=> $this->DateRedaction,
            'dateModification'=>$this->dateModification,
            'ouvrage_id'=> $this->ouvrage_id


        ];
    }
}
