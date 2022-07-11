<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
class PedidoController extends Controller
{
   
    public function index()
    {
        return Pedido::all();
    }
//funcao de criacao do pedido 
    public function store(request $request)
    {
        //esta funcao esta pegando todos os inputs do form e enviando para o banco
        $pedido = new Pedido;
        $pedido->nome=$request->nome;
        $pedido->cpf=$request->cpf;
        $pedido->valorFrete=$request->valorFrete;
        $pedido->dataEntrega=$request->dataEntrega;
        
        $pedido->save();

        return view('form');
        //ao final a funcao salva no banco e retorna uma view
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
