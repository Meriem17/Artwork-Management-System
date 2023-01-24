<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AcquisitionResource extends JsonResource
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
            'poprietaire'=> ucfirst($this->localisation),
            'date'=>$this->localisation,
            'lieu'=>ucfirst($this->localisation),
            'prix'=>$this->localisation,
            'moyenAcquisition'=> ucfirst($this->localisation),
            'preuveAchat'=> ucfirst($this->localisation),
            'certificatAuthenticite'=> ucfirst($this->localisation),
            
        ];
    }
}
