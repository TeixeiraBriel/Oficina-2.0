## Oficina-2.0


# Sobre

 Recebemos na Codificar o contato de um cliente, com os seguintes dizeres:


“Olá Codificar, temos uma oficina mecânica e diariamente recebemos diversos pedidos de orçamento por telefone e veículos que chegam até nosso estabelecimento, contudo como fazemos por meio de papel, estamos perdendo diversas oportunidades de vendas, pois os papéis se perdem no meio da bagunça da oficina. Gostaríamos de um sistema simples, onde nossos vendedores pudessem cadastrar e consultar os orçamentos.”


Com base neste depoimento, conceituamos um produto denominado Oficina 2.0, que visa facilitar o acompanhamento dos pedidos de orçamento da oficina. Precisamos construir uma prova de conceito, um CRUD, o mais breve possível para concluir a venda do projeto.



# Detalhes:

Repositorio destinado para Processo Seletivo Codificar.

Neste repositorio ficam armazenadas a Oficina 2.0

Este uma aplicação proposta pela codificar. 

# Configurações


*Considerações/Configurações inciais

- Utilizado no projeto php 7, Laravel, composer (para criação do projeto laravel), MySql.

- Na raiz renomeio o arquivo .env.example para .env

- No prompt de comando acesse a pasta do projeto e digite o codigo, "composer instal", ele importará a pasta "vendor" que não é enviada ao git por ser muito grande.

- Digite o comando "php artisan key:generate".


*Configurando o banco de dados.

1 - Crie seu banco de dados.(Caso não aja banco para consultar, criar e organizar suas tabelas)

2 - Procure o arquivo .env na raiz do projeto e preencha os campos de acordo com as suas configurações:

- DB_CONNECTION=mysql (caso esteja usando mysql)

- DB_HOST=localhost (Host do seu banco)

- DB_PORT=3306 (Porta do banco)

- DB_DATABASE=Codificar (Nome do banco)

- DB_USERNAME=root (Usuario do banco)

- DB_PASSWORD=pass (senha para acessar o banco)

    - obs.: Dados preechidos acima são relativos ao meu ambiente de trabalho.
    

3 - Procure o arquivo /config/database.php. Dentro do return, procure 'connections' e vá na array 'mysql' (ou SGBD utilizado), e preencha os campos de acordo com suas configurações anteriores:

- 'host' => env('DB_HOST', 'localhost'), (Host do seu banco)

- 'port' => env('DB_PORT', '3306'), (Porta do banco)

- 'database' => env('DB_DATABASE', 'Codificar'), (Nome do banco)

- 'username' => env('DB_USERNAME', 'root'), (Usuario do banco)

- 'password' => env('DB_PASSWORD', 'pass'), (senha para acessar o banco)


4 - Abra o prompt de comando, vá até o diretorio do projeto, e por fim digite o codigo "php artisan migrate". Este codigo irá adicionar as tabelas necessarias para o uso do site.


5 - Por fim utilize o comando "php artisan serve" para hospedar o site no seu localhost e acessa-lo no navegador com o o url dado pelo Laravel.
