<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcquisitionRequest extends FormRequest
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
        $acquisition_id = $this->acquisition->id ?? null;
        return [
            'poprietaire'=> 'required',
            'date'=> 'required',
            'lieu'=> 'required',
            'prix'=> 'required',
            'moyenAcquisition'=> 'required',
            'preuveAchat'=> 'required',
            'certificatAuthenticite'

              
        ];
    }
}
