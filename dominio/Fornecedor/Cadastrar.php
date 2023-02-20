<?php

namespace Dominio\Fornecedor;

use App\Http\Requests\StoreFornecedorRequest;
use App\Models\Fornecedor as Model;
use Illuminate\Support\Facades\DB;

class Cadastrar
{
    public function cadastrar(StoreFornecedorRequest $request): Model
    {
        $novo = null;

        DB::transaction(function () use (&$novo, $request) {
            $novo = Model::create($request->all());
            if ($request->has('contas_pagar'))
                $novo->contasPagar()->createMany($request->input('contas_pagar'));
        });
        return $novo;
    }
}
