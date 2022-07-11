@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
  <section>
    <form class="row g-3 shadow-lg p-3 mb-5 bg-body" action="/form" method="POST">
      @csrf 
      <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required maxlength="45">
      </div>
      <div class="col-md-6">
        <label for="cpf" class="form-label">CPF</label>
        <input type="number" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required>
      </div>
      <div class="col-md-6">
        <label for="valorFrete" class="form-label">Valor do Frete</label>
        <input type="number" class="form-control" name="valorFrete" id="valorFrete" placeholder="R$ 150,85" required>
      </div>
      <div class="col-md-2">
        <label for="dataEntrega" class="form-label">Data de Entrega</label>
        <input type="date" class="form-control" name="dataEntrega" id="dataEntrega" required>
      </div>
      <div class="col-12">
        <button type="submit" name="submit" id="submit" class="btn btn-primary" onClick="validaFormulario()">Cadastrar</button>
      </div>
  </form>
  </section>
@endsection
  <script>  
    //aqui eu chamo a funcao valida formulario
    document.getElementById("submit").addEventListener("click", validaFormulario)
   
      //função de validacao do formulario de cadastro de pedido
    function validaFormulario() {
      if(document.getElementById("nome").value != "" &&  
         document.getElementById("cpf").value != "" && //o ideal era uma funcao de validacao de cpf 
         document.getElementById("valorFrete").value != "" && 
         document.getElementById("dataEntrega").value != ""){
        alert("Pronto! Pedido cadastrado com sucesso.")
        }else{
        alert("Por favor, preencha os campos corretamente!")
      }}
  </script>
