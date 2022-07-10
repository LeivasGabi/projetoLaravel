<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
   
    public function index()
    {
        return Pedido::all();
    }
//funcao de criacao do pedido 
    protected function create(array $data)
    {
        return Pedido::create([
            'nome' => $data['nome'],
            'cpf' => $data['cpf'],
            'valorFrete' => $data['valorFrete'],
            'dataEntrega' => $data['dataEntrega'],
        ]);
    }

    public function show($id)
    {
        return Pedido::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $pedido = Pedido::findOrFail($id);
       $pedido->update($request->all());
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
    }
}
