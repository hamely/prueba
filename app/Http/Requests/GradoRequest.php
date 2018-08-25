<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradoRequest extends FormRequest
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
            'codigo' => ['required','unique:grado,codigo,$id'],
            'nombrecorto'=>'required',
            'nombre'=>'required',
            'sigla'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'codigo.required'=>'Debe ingresar el código del grado',
            'codigo.unique'=>'El código de tipo de grado ya existe. Ingrese otro código',
            'nombrecorto.required'=>'Debe ingresar el nombre corto del grado',
            'nombre.required'=>'Debe ingresar el nombre largo del grado',
            'sigla.required'=>'Debe ingresar el nombre abreviado o siglas del grado',
        ];
    }
}
