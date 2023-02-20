<?php

namespace App\Http\Requests;

class StoreContaBancariaRequest extends ContaBancariaRequestDoc
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
            'banco_nome' => ['required', 'max:255'],
            'agencia_numero' => ['required', 'max:10'],
            'conta_numero' => ['required', 'max:10'],
            'saldo_inicial' => ['required', 'numeric'],

        ];
    }
}
