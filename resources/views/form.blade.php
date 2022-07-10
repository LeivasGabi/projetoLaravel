<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
  <!--arquivos bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
  <!--arquivos bootstrap -->

  <Header>
        <ul class="nav justify-content-center fs-2">
          <li class="nav-item">
              <a class="nav-link disabled" aria-current="page" href="#">Cadastrar Pedidos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/ProjetoLaravel/resources/views/Relatorio.blade.php">Relatórios de Pedidos</a>
          </li>
        </ul>
    </Header>
    <section>
      <form class="row g-3 shadow-lg p-3 mb-5 bg-body" alt="Max-width 85%">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" required maxlength="45">
        </div>
        <div class="col-md-6">
          <label for="cpf" class="form-label">CPF</label>
          <input type="number" class="form-control" id="cpf" placeholder="000.000.000-00" data-minlength="11" required>
        </div>
        <div class="col-md-6">
          <label for="valorFrete" class="form-label">Valor do Frete</label>
          <input type="number" class="form-control" id="valorFrete" placeholder="R$ 150,85" required>
        </div>
        <div class="col-md-2">
          <label for="dataEntrega" class="form-label">Data de Entrega</label>
          <input type="date" class="form-control" id="dataEntrega" required>
        </div>
        <div class="col-12">
          <button type="submit" id="cadastrar" class="btn btn-primary" onClick="validaFormulario()">Cadastrar</button>
        </div>
      </form>
    </section>
  <script>  
    
    //aqui eu chamo a funcao valida formulario
    document.getElementById("cadastrar").addEventListener("click", validaFormulario)
   
      //função de validacao do formulario de cadastro de pedido
    function validaFormulario() {
      if(document.getElementById("nome").value != "" &&  
         document.getElementById("cpf").value != "" && 
         document.getElementById("valorFrete").value != "" && 
         document.getElementById("dataEntrega").value != ""){
        alert("Pronto! Pedido cadastrado com sucesso.")
        }else{
        alert("Por favor, preencha os campos corretamente!")
      }}
  </script>
</body>
</html>
