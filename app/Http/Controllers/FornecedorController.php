<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFornecedorRequest;
use App\Http\Requests\UpdateFornecedorRequest;
use App\Http\Resources\FornecedorResources as Resources;
use App\Models\Fornecedor as Model;

class FornecedorController extends Controller
{
    /**
     * Listar Fornecedores 
     * 
     * 
     * retorna todos os fornecedores do banco
     * 
     * @group Fornecedor
     * 
     * @responseFile response/fornecedores/listarFornecedores.json
     */
    public function index()
    {
        return Resources::collection(Model::paginate());
    }

     /**
     * Criar Fornecedor 
     * 
     * cria um fornecedor conforme os dados inseridos
     * 
     * @group Fornecedor
     * 
     * @responseFile 201 response/fornecedores/detalhar.json
     */
    public function store(StoreFornecedorRequest $request)
    {
        $novo = Model::create($request->all());
        return new Resources($novo);
    }

    /**
     * Retorna Fornecedor 
     * 
     * retorna um fornecedor com base no id passado
     * 
     * @group Fornecedor
     * 
     * @urlParam fornecedor integer required O valor do fornecedor_id     
     * 
     * @responseFile response/fornecedores/detalhar.json
     */
    public function show(Model $fornecedor)
    {
        return new Resources($fornecedor);
    }

    /**
     * Atualizar Fornecedor 
     * 
     * Atualiza os dados de um fornecedor conforme os dados inseridos
     * 
     * @group Fornecedor
     * 
     * @urlParam fornecedor integer required O valor do fornecedor_id     
     * 
     * @responseFile 200 response/fornecedores/detalhar.json
     */
    public function update(UpdateFornecedorRequest $request, Model $fornecedor)
    {
        $fornecedor->update($request->all());
        return new Resources($fornecedor);
    }


    /**
     * Excluir Fornecedor 
     * 
     * exclui os dados de um fornecedor 
     * 
     * @urlParam fornecedor integer required O valor do fornecedor_id     
     * 
     * @group Fornecedor
     * 
     * @response
     */
    public function destroy(Model $fornecedor)
    {
        $fornecedor->delete();
    }
}
