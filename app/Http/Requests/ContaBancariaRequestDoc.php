<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class ContaBancariaRequestDoc extends FormRequest
{
    public function bodyParameters()
    {
        return [
            'banco_nome' => [
                'description' => 'nome do banco.',
                'example' => 'Itau',
            ],
            'agencia_numero' => [
                'description' => 'numero da agencia.',
                'example' => '0927',
            ],
            'conta_numero' => [
                'description' => 'numero da conta.',
                'example' => '509428',
            ],
            'saldo_inicial' => [
                'description' => 'saldo inicial da conta.',
                'example' => '25.28',
            ],
        ];
    }
}
