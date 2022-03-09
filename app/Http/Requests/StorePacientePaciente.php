<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePacientePaciente extends FormRequest
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
            'nombre' => 'required | min:2 | max:100',
            'apellido_p' => 'required | min:2 | max:100',
            'apellido_m' => 'required | min:2 | max:100',
            'edad' => 'required',
            'codigo_postal' => 'required | min:5 | max:5',
            'estado' => 'required',
            'ciudad' => 'required',
            'delegacion' => 'required',
            'colonia' => 'required',
            'padecimiento' => 'nullable',
            'medicamento' => 'nullable',
            'fecha_inicio' => 'nullable',
            'medico_id' => 'nullable'

        ];
    }
}
