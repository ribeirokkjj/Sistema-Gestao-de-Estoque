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

## Funcionalidades

- Cadastro de produtos
- Listagem de produtos
- Edição de produtos
- Exclusão de produtos

## Caso de Uso

*Use Case:* "Usuário cadastra, lista, edita e exclui um produto no sistema."

*Functional Requirements:*

- O sistema deve permitir cadastrar produtos.
- O sistema deve permitir listar produtos.
- O sistema deve permitir editar produtos.
- O sistema deve permitir excluir produtos.