<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class Cliente extends JsonResource
{
    public function toArray($request)
    {
        return[
            'nome' =>$this->nome,
            'cpf' =>$this->cpf, 
            'data_cadastro'=>$this->data_cadastro,
        ];
    }
}
