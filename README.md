# projetoLaravel
Executar:
1-Para executar o projeto é necessario usar o xampp, então após baixar o zip do projeto você deve adicionar a parta descompactada na pasta "htdocs" do xampp.
2-Usei o phpMyAdmin para gerenciar o banco de dados mysql, este recurso já vem com o xampp, acessando a página localhost já tem o link direto para a o gerenciador
  USUARIO = root
  SENHA = (nao tem senha)
3- Por fim é necessario executar o mysql no painel de controle do XAMPP e o rodar o comando " php artisan serve " em qualquer terminal.

SOBRE O PROJETO:    
Foi criado: 
Models, Controllers e Migrations de Clientes e Pedidos
As views blade: form e relatorio 
Layout para views.
Base de dados: projetolaravel 
Tabelas: clientes e pedidos

Eu crie duas tabelas: tbl_clientes e pedidos e eu pretendia usar a coluna cpf como chave estrangeira, mas a configuração não funcionou e quando tenta enviar o form ele 
retorna como um erro de violação de integridade. Se resolvido este erro eu projetei para testar no postman.





