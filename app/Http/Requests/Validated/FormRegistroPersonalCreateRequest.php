<?php

namespace App\Http\Requests\Validated;

use Illuminate\Foundation\Http\FormRequest;

class FormRegistroPersonalCreateRequest extends FormRequest
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
            'institucion' => 'required|not_in:0',
            'estado' => 'required|not_in:0',
            'municipio' => 'required|not_in:0',
            'parroquia' => 'required|not_in:0',
            'nucleo' => 'required|not_in:0',
            'tipo_personal' => 'required|not_in:0',
            'condegreso' => 'required|not_in:0',
            'nombre' => 'required|string|min:3|max:150',
            'apellido' => 'required|string|min:3|max:150',
            'cedulapersonal' => 'required|unique:registro_personal,cedula|min:8|max:9',
            'fnacimiento' => 'required|not_in:0',
            'sexo' => 'required|not_in:0',
            'estcivil' => 'required|not_in:0',
            'fingreso' => 'required|not_in:0',
            'fegreso' => 'required|not_in:0',
            'userEmail' => 'required|unique:registro_personal,correo_email|max:255|not_in:0',
        ];
    }

    public function messages()
    {
        return [
            'institucion.not_in' => 'Seleccione una Institución',
            'estado.not_in' => 'Debe seleccionar un estado del país',
            'municipio.not_in' => 'Debe seleccionar un municipio',
            'parroquia.not_in' => 'Debe seleccionar una parroquia',
            'nucleo.not_in' => 'Debe seleccionar el nucleó',
            'tipo_personal.not_in' => 'Seleccione el tipo de personal',
            'condegreso.not_in' => 'Seleccione la condición de egreso del personal de la institución ministerial',
            'nombre.not_in' => 'Escriba el primer Nombre del funcionario',
            'apellido.not_in' => 'Escriba el primer Apellido del Funcionario',
            'cedulapersonal.not_in' => 'Escriba la cédula de identidad',
            'fnacimiento.not_in' => 'Seleccione la fecha de nacimiento del funcionario',
            'sexo.not_in' => 'Seleccione la sexualidad del funcionario',
            'estcivil.not_in' => 'Seleccione el estado civil del funcionario de acuerdo a su cédula de identidad',
            'fingreso.not_in' => 'Seleccione la fecha de ingreso a la institución ministerial del funcionario',
            'fegreso.not_in' => 'Seleccione la fecha de egreso del funcionario de la institución ministerial',
            'userEmail' => 'Escriba una dirección de Correo Valida',

        ];
    }
}
