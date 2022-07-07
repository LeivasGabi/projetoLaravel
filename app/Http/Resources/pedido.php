<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class pedido extends JsonResource
{
    public function toArray($request)
    {
        return[
            'id_pedido'=>$this->id_pedido,
            'valor_frete'=>$this->valor_frete, 
            'data_entrega'=>$this->data_entrega,
            'cpf'=>$this->cpf,
        ];

    }
}
