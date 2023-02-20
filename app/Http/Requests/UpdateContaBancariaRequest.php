<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContaBancariaRequest extends ContaBancariaRequestDoc
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
            'banco_nome' => ['filled', 'max:255'],
            'agencia_numero' => ['filled', 'max:10'],
            'conta_numero' => ['filled', 'max:10'],
            'saldo_inicial' => ['filled', 'numeric'],
        ];
    }
}
