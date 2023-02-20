<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContaPagarRequest extends ContaPagarRequestDoc
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
            'fornecedor_id' => ['filled','integer', 'exists:fornecedor,fornecedor_id'],
            'descricao' => ['filled', 'max:255'],
            'valor' => ['filled', 'numeric']
        ];
    }
}
