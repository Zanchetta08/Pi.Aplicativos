<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFromRequestVagas extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titulo' => [
                'required',
                'string',
                'max:50',
                'min:1'
            ],
            'empresa' => [
                'required',
                'string',
                'max:50',
                'min:1'
            ],
            'desc' => [
                'required',
                'string',
                'max:255',
                'min:1'
            ],
            'requisitos' => [
                'required',
                'string',
                'max:255',
                'min:1'
            ],
            'salario' => [
                'required',
                'string',
                'max:50',
                'min:1'
            ]
        ];
    }

    public function messages() 
    {
        return [
            'titulo.required' => 'Escolha um titulo para a vaga',
            'titulo.max' => 'Titulo: Numero maximo de caracters atingido',
            'empresa.required' => 'Coloque o nome da sua empresa',
            'empresa.max' => 'Empresa: Numero maximo de caracters atingido',
            'desc.required' => 'Escolha uma descrição para a vaga',
            'desc.max' => 'Descrição: Numero maximo de caracters atingido',
            'requisitos.required' => 'Escolha os requisitos para a vaga',
            'requisitos.max' => 'Requisitos: Numero maximo de caracters atingido',
            'salario.required' => 'Escreva o salario para a vaga',
            'salario.max' => 'Salario: Numero maximo de caracters atingido',
        ];
    }
}
