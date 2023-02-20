<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class FornecedorRequestDoc extends FormRequest
{
    public function bodyParameters()
    {
        return [
            'nome' => [
                'description' => 'nome do fornecedor.',
                'example' => 'Fornecedor de agua',
            ],
            'endereco' => [
                'description' => 'endereco do fornecedor.',
                'example' => 'rua x, numero y, bairro z',
            ],
            'email' => [
                'description' => 'email do fornecedor.',
                'example' => 'fornecedor@teste.com',
            ],
            'telefone' => [
                'description' => 'telefone do fornecedor.',
                'example' => '(11) 11111111111',
            ],
        ];
    }
}
