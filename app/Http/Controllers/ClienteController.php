<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller

{
    public function index()
    {
        return Cliente::all();   
    }
   
    public function store(Request $request)
    {

        //a ideia era salvar os dados do form em duas tabelas, clientes e pedido, e esta seria a logica para salvar em Clientes
        $cliente = new Cliente;
        $cliente->nome=$request->nome;
        $cliente->cpf=$request->cpf;
        $cleinte->dataCadastro=$request->dataCadastro;

        $cliente->save();

        return view('form');
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $cliente = Cliente::findOrFail($id);
       $cliente->update($request->all());
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
    }
}
