<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
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
            'cip'=>'required|min:6|max:8',
            'apellidopaterno'=>'required|alpha',
            'apellidomaterno'=>'required|alpha',
            'nombres'=>'required|alpha',
            'dni'=>'min:8|max:8',
        ];
    }
    public function messages()
    {
        return [
            'cip.required'=>'Debe ingresar número de cip',
            'cip.min'=>'El cip debe tener mínimo 6 dígitos',
            'cip.max'=>'El cip debe tener máximo 8 dígitos',
            'apellidopaterno.required'=>'Debe ingresar apellido paterno',
            'apellidopaterno.alpha'=>'Debe ingresar solo letras',
            'apellidomaterno.required'=>'Debe ingresar apellido materno',
            'apellidomaterno.alpha'=>'Debe ingresar solo letras',
            'nombres.required'=>'Debe ingresar nombres',
            'nombres.alpha'=>'Debe ingresar solo letras',
            'dni.min'=>'Debe ingresar 8 dígitos',
            'dni.max'=>'Debe ingresar 8 dígitos',
        ];
    }
}
