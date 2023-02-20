<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class ContaPagarRequestDoc extends FormRequest
{
    public function bodyParameters()
    {
        return [
            'fornecedor_id' => [
                'description' => 'id do fornecedor.',
                'example' => '1',
            ],
            'descricao' => [
                'description' => 'Descrição da conta.',
                'example' => 'conta de luz',
            ],
            'valor' => [
                'description' => 'valor da conta.',
                'example' => '105.60',
            ]
        ];
    }
}
