<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id_cliente',
        'nome_empresa',
        'cnpj',
        'data_cadastro',
    ];
}
