<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FicheOeuvreRequest extends FormRequest
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
        $ficheOeuvre_id = $this->ficheOeuvre->id ?? null;
        return [
            'nomRedacteur'=> 'required',
            'DateRedaction'=> 'required',
            'dateModification',
            'ouvrage_id'=> 'required',
        ];
    }
}
