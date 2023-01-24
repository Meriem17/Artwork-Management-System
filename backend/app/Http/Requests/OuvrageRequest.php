<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OuvrageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $ouvrage_id = $this->ouvrage->id ?? null;
        return [
            'titre'=>"required",
            'dateCreation'=>"required",
            'materials'=>"required",
            'support'=>"required", 
            'dimensions'=>"required",
            'poid'=>"required",
            'nbrElemt'=>"required",
            'numTerage'=>"required",
            'typeTirage'=>"required",
            'description'=>"required",
            'artiste_id'=>"required"
        ];
    }
}
