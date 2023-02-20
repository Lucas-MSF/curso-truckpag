<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContaPagarRequest;
use App\Http\Requests\UpdateContaPagarRequest;
use App\Http\Resources\ContaPagarResources as Resources;
use App\Models\ContaPagar as Model;


class ContaPagarController extends Controller
{
/**
     * Listar contas a pagar 
     * 
     * retorna todas as contas a pagar do banco
     * @group Conta Pagar
     * @responseFile response/contaPagar/listar.json
     */
    public function index()
    {
        return Resources::collection(Model::paginate());
    }

    /**
     * Criar conta a pagar 
     * 
     * cria um conta a pagar conforme os dados inseridos
     * @group Conta Pagar
     * @responseFile 201 response/contaPagar/detalhar.json
     */
    public function store(StoreContaPagarRequest $request)
    {
        $novo = Model::create($request->all());
        return new Resources($novo);
    }

    /**
     * Retorna conta a Pagar 
     * 
     * retorna uma conta a pagar com base no id passado
     * @group Conta Pagar
     * @responseFile response/contaPagar/detalhar.json
     */
    public function show(Model $contaPagar)
    {
        return new Resources($contaPagar);
        
    }

    /**
     * Atualizar conta a pagar 
     * 
     * Atualiza os dados de uma conta a pagar conforme os dados inseridos
     * @group Conta Pagar
     * @responseFile 200 response/contaPagar/detalhar.json
     */

    public function update(UpdateContaPagarRequest $request, Model $contaPagar)
    {
        $contaPagar->update($request->all());
        return new Resources($contaPagar);
    }

     /**
     * Excluir conta a pagar 
     * 
     * exclui os dados de uma conta a pagar 
     * @urlParam contaPagar integer required O valor do contaPagar_id     
     * @group Conta Pagar
     * @response
     */
    public function destroy(Model $contaPagar)
    {
        $contaPagar->delete();
    }
}
