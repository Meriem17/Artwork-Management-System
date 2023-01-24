<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OuvrageResource extends JsonResource
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
            'dateCreation'=>$this->dateCreation,
            'materials'=> ucfirst($this->materials),
            'support'=> ucfirst($this->support), 
            'dimensions'=> ucfirst($this->dimensions),
            'poid'=> $this->poid,
            'nbrElemt'=> $this->nbrElemt,
            'numTerage'=> $this->numTerage,
            'typeTirage'=> ucfirst($this->typeTirage),
            'description'=> ucfirst($this->description),
            'artiste_id'=> $this->artiste_id
        ];
    }
}
