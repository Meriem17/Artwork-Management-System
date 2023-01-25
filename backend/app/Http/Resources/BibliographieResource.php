<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BibliographieResource extends JsonResource
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
            'nomAuteur'=> ucfirst($this->nomAuteur),
            'datePublication'=>$this->datePublication,
            'page'=>$this->page,
            'editeur'=> ucfirst($this->editeur),
            'ouvrage_id'=> $this->ouvrage_id

        ];
    }
}
