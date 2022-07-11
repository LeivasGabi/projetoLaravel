<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'id_pedido', //coluna de auto incremento
        'valorFrete', 
        'dataEntrega',
        'cpf', //chave estrangeira
        'nome',
        
    ];
 
    //funcao com intuito de unir as duas tabelas
    // public function clientes(){
    //     return $this->hasMany('App\Models\Cliente');
    // }
}

