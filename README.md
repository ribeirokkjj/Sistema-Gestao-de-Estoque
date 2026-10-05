# Sistema de Gestão de Estoque de Mercado

Esse projeto serve para cadastrar, listar, editar e excluir produtos de um mercado.

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML

## Requisitos para Execução

- PHP
- PHPMyAdmin
- XAMPP

## Instalação

1. Copie o projeto para a pasta do htdocs.
2. Cole o código do arquivo db.sql no PHPMyAdmin.
4. Verifique o arquivo `infra/conexao.php`.

## Estrutura do Banco

O banco `mercadoestoque` possui a tabela `produto` com os campos `id`, `nome`, `categoria`, `descricao`, `preco`, `quantidade-estoque`, `data-validade`, `criado-em` e `atualizado-em`.

## Funcionalidades:

- Cadastrar Produto: Preencher um formulário simples com nome, categoria, descrição, preço, quantidade e data de validade para salvar no sistema.
- Ver Produtos: Mostrar uma lista com todos os produtos cadastrados para saber o que tem no estoque.
- Editar Produto: Alterar as informações de um produto que já existe ou atualizar a quantidade que tem dele.
- Apagar Produto: Remover um produto do sistema quando ele não for mais usado.

## Regras de Negócio (RN)

- RN1: Todo produto cadastrado deve conter obrigatoriamente nome, categoria, descrição, preço, quantidade em estoque e data de validade.
- RN2: O preço do produto deve ser obrigatoriamente um valor numérico positivo.
- RN3: A quantidade de produtos em estoque deve ser um número inteiro igual ou maior que zero.
- RN4: A exclusão de um produto remove o registro do banco de dados de forma definitiva.

## Requisitos Funcionais (RF)

- RF1: O sistema deve permitir o cadastro de novos produtos.
- RF2: O sistema deve permitir a listagem e visualização de todos os produtos cadastrados.
- RF3: O sistema deve permitir a edição de produtos existentes.
- RF4: O sistema deve permitir a exclusão de produtos do banco de dados.

## Requisitos Não Funcionais (RNF)

- RNF1: O sistema deve utilizar obrigatoriamente *Prepared Statements* em todas as operações de banco de dados para garantir a segurança.
