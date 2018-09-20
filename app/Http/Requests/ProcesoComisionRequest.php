<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcesoComisionRequest extends FormRequest
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
            'numerocomision'=>'required',
            'lugarcomision'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'numerocomision.required'=>'Debe ingresar el número de comision',
            'lugarcomision.required'=>'Debe ingresar el lugar de comision',
        ];
    }
}
