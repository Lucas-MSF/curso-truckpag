<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FornecedorRequestDoc
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
            'nome' => ['required', 'max:255'],
            'endereco' => ['required', 'max:255'],
            'email' => ['filled', 'max:255'],
            'telefone' => ['required', 'max:255'],
            'contas_pagar' => ['filled', 'array'],
            'contas_pagar.*.descricao' => ['required', 'max:255'],
            'contas_pagar.*.valor' => ['required', 'numeric']
        ];
    }
}
