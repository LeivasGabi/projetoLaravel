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
              <a class="nav-link active" aria-current="page" href="#">Relatórios de Pedidos</a>
          </li>
        </ul>
    </Header>
    <section>
      <form class="row g-3 shadow-lg p-3 mb-5 bg-body">
        <div class="col-md-6">
          <label for="Nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="Nome">
        </div>
        <div class="col-md-6">
          <label for="CPF" class="form-label">CPF</label>
          <input type="number" class="form-control" id="CPF" placeholder="000.000.000-00">
        </div>
        <div class="col-md-6">
          <label for="ValorFrete" class="form-label">Valor do Frete</label>
          <input type="number" class="form-control" id="ValorFrete" placeholder="R$ 150,85">
        </div>
        <div class="col-md-2">
          <label for="DataEntrega" class="form-label">Data de Entrega</label>
          <input type="date" class="form-control" id="DataEntrega">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </section>
  <script>  

    function validaCPF() {

      cpf = cpf.replace(/[^\d]+/g,'');	
      if(cpf == '') return false;	
      // Elimina CPFs invalidos conhecidos	
      if (cpf.length != 11 || 
      cpf == "00000000000" || 
      cpf == "11111111111" || 
      cpf == "22222222222" || 
      cpf == "33333333333" || 
      cpf == "44444444444" || 
      cpf == "55555555555" || 
      cpf == "66666666666" || 
      cpf == "77777777777" || 
      cpf == "88888888888" || 
      cpf == "99999999999")
      return false;		
      // Valida o primeiro digito	
      add = 0;	
      for (i=0; i < 9; i ++)		
      add += parseInt(cpf.charAt(i)) * (10 - i);	
      rev = 11 - (add % 11);	
      if (rev == 10 || rev == 11)		
      rev = 0;	
      if (rev != parseInt(cpf.charAt(9)))		
      return false;		
      // Valida o segundo digito	
      add = 0;	
      for (i = 0; i < 10; i ++)		
      add += parseInt(cpf.charAt(i)) * (11 - i);	
      rev = 11 - (add % 11);	
      if (rev == 10 || rev == 11)	
      rev = 0;	
      if (rev != parseInt(cpf.charAt(10)))
      return false;		
      return true;   
      }
     //função de validacao do formulario de cadastro de pedido
      function validaFormulario() {
      if(document.getElementById("nome").value != "" &&  
      document.getElementById("CPF").value != "" && 
      document.getElementById("ValorFrete").value != "" && 
      document.getElementById("DataEntrega").value != ""){
      alert("Pronto! Pedido cadastrado com sucesso.")
      }else{
      alert("Por favor, preencha os campos corretamente!")
      }}
  </script>
</body>
</html>
