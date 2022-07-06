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

    public function store(Request $request)
    {
        Pedido::create($request->all());
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
