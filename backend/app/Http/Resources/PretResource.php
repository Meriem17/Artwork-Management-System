<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PretResource extends JsonResource
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
            'institution'=> ucfirst($this->institution),
            'nomExposition'=> ucfirst($this->nomExposition),
            'dateDepart'=> $this->dateDepart,
            'dateRetour'=>$this->dateRetour,
            'ouvrage_id'=> $this->ouvrage_id

        ];
    }
}
