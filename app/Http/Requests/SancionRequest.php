<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SancionRequest extends FormRequest
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
            'codigo' => ['required','unique:sancion,codigo,$id'],
            'sancion'=>'required',
        ];
    }
    public function messages()
    {
        return 
        [
            'codigo.required'=>'Debe ingresar el código de tipo de sanción',
            'codigo.unique'=>'El código de tipo de sanción ya existe. Ingrese otro código',
            'sancion.required'=>'Debe ingresar el tipo de sanción',
        ];
    }
   
}
