<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContaBancariaRequest;
use App\Http\Requests\UpdateContaBancariaRequest;
use App\Http\Resources\ContaBancariaResources as Resources;
use App\Models\ContaBancaria as Model;


class ContaBancariaController extends Controller
{
/**
     * Listar conta bancaria 
     * 
     * retorna todos os conta bancaria do banco
     * 
     * @group Conta Bancaria
     * 
     * @responseFile response/contaBancaria/listar.json
     */
    public function index()
    {
        return Resources::collection(Model::paginate());
    }

    /**
     * Criar conta bancaria 
     * 
     * cria um conta bancaria conforme os dados inseridos
     *
     * @group Conta Bancaria
     * 
     * @responseFile 201 response/contaBancaria/detalhar.json
     */
    public function store(StoreContaBancariaRequest $request)
    {
        $novo = Model::create($request->all());
        return new Resources($novo);
    }

    /**
     * Retorna conta bancaria 
     * 
     * retorna um conta bancaria com base no id passado
     * 
     * @urlParam conta_bancaria_id integer required O valor do conta_bancaria_id     
     * 
     * @group Conta Bancaria
     * 
     * @responseFile response/contaBancaria/detalhar.json
     */
    public function show(Model $contaBanco)
    {
        return new Resources($contaBanco);
        
    }

    /**
     * Atualizar conta bancaria 
     * 
     * Atualiza os dados de um conta bancaria conforme os dados inseridos
     *
     * @urlParam conta_bancaria_id integer required O valor do conta_bancaria_id      
     * 
     * @group Conta Bancaria
     * 
     * @responseFile 200 response/contaBancaria/detalhar.json
     */

    public function update(UpdateContaBancariaRequest $request, Model $contaBanco)
    {
        $contaBanco->update($request->all());
        return new Resources($contaBanco);
    }

     /**
     * Excluir conta bancaria 
     * 
     * exclui os dados de um conta bancaria
     *  
     * @urlParam conta_bancaria_id integer required O valor do conta_bancaria_id     
     * 
     * @group Conta Bancaria
     * 
     * @response
     */
    public function destroy(Model $contaBanco)
    {
        $contaBanco->delete();
    }
} 
