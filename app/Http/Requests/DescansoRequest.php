<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DescansoRequest extends FormRequest
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
            'codigo' => ['required','unique:comision,codigo,$id'],
            'nombre' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'codigo.required'=>'Debe ingresar el código del descanso médico',
            'codigo.unique'=>'El código de descanso médico ya existe. Ingrese otro código',
            'nombre.required'=>'Ingresar la enfermedad',
        ];
    }
}
