<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicenciaRequest extends FormRequest
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
            'codigo' => ['required','unique:licencia,codigo,$id'],
            'nombre'=>'required',
        ];
    }
   
    public function messages()
    {
        return 
        [
            'codigo.required'=>'Debe ingresar el código de tipo de licencia',
            'codigo.unique'=>'El código de tipo de licencia ya existe. Ingrese otro código',
            'nombre.required'=>'Debe ingresar el tipo de licencia',
        ];
    }
}
