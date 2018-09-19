<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
//use Dingo\Api\Http\FormRequest;
class HorarioRequest extends FormRequest
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
            'codigo' => ['required','unique:horario,codigo,$id'],
            'nombre'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'codigo.required'=>'Debe ingresar el código del horario', 
            'codigo.unique'=>'El código de tipo de horario ya existe. Ingrese otro código',
            'nombre.required'=>'Debe ingresar el tipo de horario',
        ];
    }
}
