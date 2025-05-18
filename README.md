# Consulta de Dados - Laravel

Este projeto é um sistema simples de cadastro e consulta de clientes, desenvolvido em Laravel, como parte de um teste técnico.  
Permite cadastrar pessoas com nome, CPF, email, data de nascimento, telefone, gênero, estado e endereço, além de consultar e filtrar os dados cadastrados.

## Funcionalidades

- Cadastro de clientes com validação de dados
- Consulta de clientes com filtros por nome, estado, gênero e busca por texto
- Visualização detalhada dos dados de cada cliente
- Interface responsiva e estilizada
- Base de dados fictícia gerada automaticamente para testes

## Tecnologias utilizadas

- PHP 8.3.21
- Laravel 12
- MySQL 9.0.1
- Blade (template engine)
- CSS customizado

## Como rodar o projeto

1. **Clone o repositório:**
   ```sh
   git clone https://github.com/Lucasttr/consulta_de_dados_laravel.git
   cd consulta_de_dados


2.Instale as dependências do PHP:
composer install

3.Configure o arquivo .env:
Copie .env.example para .env (se necessário)
Configure as variáveis de banco de dados conforme seu ambiente local

4.Gere a chave da aplicação:
php artisan key:generate

5.Rode as migrations e seeders para criar e popular o banco:
php artisan migrate --seed

6. Inicie o servidor utilizando
php artisan serve

Estrutura de Pastas

-Cliente.php — Model do cliente
-ClienteController.php — Controller principal
-migrations — Migrations das tabelas
-ClienteSeeder.php — Seeder para popular clientes fictícios
-views — Views Blade (cadastro, consulta, detalhes)
-style.css — Estilização customizada

Desenvolvido por Lucas Tadeu.
Primeiro contato com Laravel — projeto de aprendizado e demonstração.
