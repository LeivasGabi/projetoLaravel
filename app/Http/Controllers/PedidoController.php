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
    protected function store(request $request)
    {

        $pedido = new Pedido;

        $pedido->nome=$request->nome;
        $pedido->cpf=$request->cpf;
        $pedido->valorFrete=$request->valorFrete;
        $pedido->dataEntrega=$request->dataEntrega;

        $pedido->save();

        return view('form');

        // return Pedido::create([
        //     'nome' => $data['nome'],
        //     'cpf' => $data['cpf'],
        //     'valorFrete' => $data['valorFrete'],
        //     'dataEntrega' => $data['dataEntrega'],
        // ]);
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
