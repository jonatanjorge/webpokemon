<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePokemonesRequest extends Request
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
            'nombre' => 'required|alpha',
            'nivel' => 'required',
            'sexos_id' => 'required|exists:sexos,id',
            'especies_id' => 'required|exists:especies,id'
        ];
    }

    public function messages()
    {
        return [
            "nombre.required" => "El nombre del pokemon es requerido!",
            "nombre.alpha" => "El nombre no puede tener números ni caracteres especiales."
        ];
    }
}
