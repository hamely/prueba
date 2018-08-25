<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargoRequest extends FormRequest
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
            'codigo' => ['required','unique:cargo,codigo,$id'],
            'nombrecorto'=>'required',
            'nombrelargo'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'codigo.required'=>'Debe ingresar el código del cargo', 
            'codigo.unique'=>'El código de tipo de cargo ya existe. Ingrese otro código',
            'nombrecorto.required'=>'Debe ingresar nombre corto del cargo',
            'nombrelargo.required'=>'Debe ingresar nombre largo del cargo',
        ];
    }
}
