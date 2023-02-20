<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContaPagarResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'conta_pagar_id' => $this->getKey(),
            'fornecedor_id' => $this->fornecedor_id,
            'descricao' => $this->descricao,
            'valor' => $this->valor,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
