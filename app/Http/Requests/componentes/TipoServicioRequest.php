<?php

namespace App\Http\Requests\componentes;

use Illuminate\Foundation\Http\FormRequest;

class TipoServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:tiposervicio,name',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Campo nombre es requerido.',
            'name.unique'   => 'Nombre de tipo de servicio ya se encuentra registrado.'
        ];

    }
}
