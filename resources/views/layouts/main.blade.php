  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <title>@yield('title')</title>
      <style> 
        header{
        padding: 50px;
        }
        section{
        padding-left: 150px;
        text-align: center;
        max-width: 85%;
        }
        </style>
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
            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/">Cadastrar Pedidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/relatorio">Relatórios de Pedidos</a>
        </li>
      </ul>
    </Header>
    @yield('content')
  </body>
  </html>
  