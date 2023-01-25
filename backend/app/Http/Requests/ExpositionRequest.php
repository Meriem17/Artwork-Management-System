<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpositionRequest extends FormRequest
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
        $bibliographie_id = $this->bibliographie->id ?? null;
        return [
            'titre'=>'required',
            'lieuExpo'=>'required',
            'dateDebut'=>'required',
            'dateFin'=>'required',
            'contraintes'=>'required',
        ];
    }
}
