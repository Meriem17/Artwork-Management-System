<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BibliographieRequest extends FormRequest
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
            'nomAuteur'=>'required',
            'datePublication'=>'required',
            'page',
            'editeur',
            'ouvrage_id'=> 'required',
        ];
    }
}
