<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'copyright'=> $this->copyright,
            'droitsPhotographiques'=> $this->droitsPhotographiques,
            'imagePath'=> $this->imagePath,
            'ouvrage_id'=> $this->ouvrage_id,
        ];
    }
}
