<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PretRequest extends FormRequest
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
        $pret_id = $this->pret->id ?? null;
        return [
            'institution'=> 'required',
            'nomExposition'=> 'required',
            'dateDepart'=> 'required',
            'dateRetour'=> 'required',
            'ouvrage_id'=> 'required',
  
        ];
    }
}
