<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
//tabela clientes
{
    protected $fillable = [
        'nome',
        'cpf', //chave estrangeira
        'data_cadastro', //autoincremento data atual
    ];
    
    //funcao com intuito de unir as duas tabelas
    // public function pedidos(){
    //     return $this->belogsTo('App\Models\Pedido');
    // }
}
