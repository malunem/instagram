<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Upload extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'img'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'img.required'=>'Caricare un\'immagine.',
            //'img.image'=>'Il file caricato non è un\'immagine.'
        ];
    }
}
