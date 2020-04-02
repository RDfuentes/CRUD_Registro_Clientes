<?php

namespace practica\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesFormRequest extends FormRequest
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
    public function rules() // aca se agregan las reglas de los diferentes datos 
    {
        return [
            'codigo_raiz'=>'required',
            'codigo_reciente',
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono',
            'nota',
        ];
    }
}
