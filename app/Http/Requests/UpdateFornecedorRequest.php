<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFornecedorRequest extends FornecedorRequestDoc
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
            'nome' => ['filled' , 'max:255'],
            'endereco' => ['filled' , 'max:255'],
            'email' => ['filled' , 'max:255'], 
            'telefone' => ['filled' , 'max:255']
        ];
    }
}
