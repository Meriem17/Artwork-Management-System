<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtisteRequest extends FormRequest
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
    {   $artiste_id = $this->artiste->id ?? null;
        return [
            'nom'=> 'required',
            'prenom'=> 'required',
            'dateNaissance'=> 'required',
            'lieuNaissance', 
            'dateDeces',
            'lieuDeces',
            'Nationalite'=> 'required',
            'Biographie'=> 'required|max:500',
        ];
    }
}
