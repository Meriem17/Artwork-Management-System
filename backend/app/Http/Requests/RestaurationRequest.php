<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurationRequest extends FormRequest
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
    { $restauration_id = $this->restauration->id ?? null;
        return [
            'constat'=> 'required',
            'causes'=>'required',
            'dateRestauration'=>'required',
            'lieuRestauration',
            'nomRestaurateur'=> 'required',
            'typeIntervention'=> 'required',
            'materials',
            'ouvrage_id'=> 'required',
        ];
     

    }
}
