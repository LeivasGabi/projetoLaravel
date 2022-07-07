<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'id_pedido', //coluna de auto incremento
        'valor_frete', 
        'data_entrega',
        'cpf', //chave estrangeira
    ];
}
