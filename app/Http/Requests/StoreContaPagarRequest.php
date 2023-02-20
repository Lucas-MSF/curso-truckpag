<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContaPagarRequest extends ContaPagarRequestDoc
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
        'fornecedor_id' => ['required','integer', 'exists:fornecedor,fornecedor_id'],
        'descricao' => ['required', 'max:255'],
        'valor' => ['required', 'numeric']
        ];
    }
}
