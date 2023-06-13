<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFromRequestTreinamento extends FormRequest
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
            'nome' => [
                'required',
                'string',
                'max:50',
                'min:1'
            ],
            'descricao' => [
                'required',
                'string',
                'max:255',
                'min:1'
            ],
            'cargaHr' => [
                'required',
                'int',
                'max:255',
                'min:1'
            ],
            'inscIni' => [
                'required',
                'date',
            ],
            'inscFim' => [
                'required',
                'date',
            ],
            'treiIni' => [
                'required',
                'date',
            ],
            'treiFim' => [
                'required',
                'date',
            ],
            'quantMin' => [
                'required',
                'int',
                'max:255',
                'min:1'
            ],
            'quantMax' => [
                'required',
                'int',
                'max:255',
                'min:1'
            ]
        ];
    }

    public function messages() 
    {
        return [
            'nome.required' => 'Escolha um nome para o treinamento',
            'nome.max' => 'Numero maximo atingido',

            'descricao.required' => 'Escolha uma descrição para o treinamento',
            'descricao.max' => 'Descricao: Numero maximo de caracters atingido',

            'cargaHr.required' => 'Escolha a carga horaria do treinamento',
            'cargaHr.max' => 'Carga Horaria: Numero maximo de caracters atingido',
            
            'inscIni.required' => 'Escolha quando as inscrições começam',
            'inscFim.required' => 'Escolha quando as inscriçoes terminam',
            'treiIni.required' => 'Escolha quando o treinamento começa',
            'treiFim.required' => 'Escolha quando o treinamento termina',
            'quantMin.required' => 'Escreva a quantidade minima de participantes',
            'quantMax.required' => 'Escreva a quantidade maxima de participantes',
        ];
    }
}
