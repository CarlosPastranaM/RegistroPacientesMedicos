<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicoMedico extends FormRequest
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
            'cedula' => 'required | min:7 | max:8',
            'especialidad' => 'nullable'
            
        ];
    }
}
